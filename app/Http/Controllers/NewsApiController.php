<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Http;

class NewsApiController extends Controller
{
    public function getNews(Request $request)
    {
        try {
            $limit = $request->get('limit', 5);
            $offset = $request->get('offset', 0);

            // Cek apakah database kosong
            $mainNews = Berita::latest()->first();

            if (!$mainNews) {
                // Kalau kosong ➜ Fetch API dan isi database
                $response = Http::get('https://api.thenewsapi.com/v1/news/all', [
                    'api_token' => 'PsXn1cRXaeCIRK13UN0uPBk242KGdCNkPqIsQG9r',
                    'language' => 'en',
                    'limit' => 10,
                ]);

                $articles = $response->json()['data'] ?? [];

                foreach ($articles as $article) {
                    Berita::updateOrCreate(
                        ['judul' => $article['title']],
                        [
                            'konten' => $article['description'] ?? 'No content',
                            'gambar_url' => $article['image_url'] ?? '',
                            'url' => $article['url'] ?? '',
                        ]
                    );
                }

                // Ambil ulang berita terbaru
                $mainNews = Berita::latest()->first();
            }

            // Ambil berita lain selain main news
            $berita = Berita::where('id', '!=', $mainNews->id)
                ->latest()
                ->skip($offset)
                ->take($limit)
                ->get();

            if ($request->ajax()) {
                return response()->json(view('partials.news', compact('berita'))->render());
            }

            return view('home', [
                'mainNews' => $mainNews,
                'berita' => $berita
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong. ' . $e->getMessage()], 500);
        }
    }

    public function getOtherNews(Request $request)
    {
        try {
            $limit = 5;
            $offset = $request->get('offset', 0);

            $response = Http::get('https://api.thenewsapi.com/v1/news/all', [
                'api_token' => 'PsXn1cRXaeCIRK13UN0uPBk242KGdCNkPqIsQG9r',
                'language' => 'en',
                'limit' => 10,
            ]);

            $articles = $response->json()['data'] ?? [];

            foreach ($articles as $article) {
                Berita::updateOrCreate(
                    ['judul' => $article['title']],
                    [
                        'konten' => $article['description'] ?? 'No content',
                        'gambar_url' => $article['image_url'] ?? '',
                        'url' => $article['url'] ?? '',
                    ]
                );
            }

            $mainNews = Berita::latest()->first();

            $berita = Berita::where('id', '!=', $mainNews->id)
                ->latest()
                ->skip($offset)
                ->take($limit)
                ->get();

            if ($request->ajax()) {
                $html = '';
                foreach ($berita as $beritaItem) {
                    $html .= view('partials.othernews', compact('beritaItem'))->render();
                }
                return response()->json($html);
            }

            return view('otherNews', [
                'mainNews' => $mainNews,
                'berita' => $berita
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong. ' . $e->getMessage()], 500);
        }
    }

    public function loadMoreOtherNews(Request $request)
    {
        try {
            $limit = $request->get('limit', 5);
            $offset = $request->get('offset', 0);

            $berita = Berita::latest()->skip($offset)->take($limit)->get();

            $html = '';
            foreach ($berita as $beritaItem) {
                $html .= view('partials.othernews', compact('beritaItem'))->render();
            }

            return response()->json($html);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to load other news.'], 500);
        }
    }

    public function show($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return response()->json(['error' => 'News not found.'], 404);
        }

        return view('news.show', compact('berita'));
    }
}
