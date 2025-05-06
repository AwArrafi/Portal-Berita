<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Carbon\Carbon;

class NewsApiController extends Controller
{
    // Controller NewsApiController.php
    // Controller NewsApiController.php
    public function getNews(Request $request)
    {
        try {
            // Dummy Data Artikel Berita dengan Gambar dan Detail
            $articles = [
                [
                    'title' => 'Penurunan Harga Properti di Jakarta',
                    'description' => 'Artikel ini mengungkapkan faktor-faktor yang menyebabkan penurunan harga properti di Jakarta.',
                    'url' => 'https://www.example.com',
                    'urlToImage' => 'https://via.placeholder.com/400x300.png?text=Penurunan+Harga+Properti',
                    'publishedAt' => '2025-04-15T12:54:24Z',
                ],
                [
                    'title' => 'Kebijakan Pemerintah dalam Mengurangi Karbon',
                    'description' => 'Pemerintah Indonesia baru-baru ini mengeluarkan kebijakan untuk mengurangi emisi karbon.',
                    'url' => 'https://www.example.com',
                    'urlToImage' => 'https://via.placeholder.com/400x300.png?text=Kebijakan+Pemerintah',
                    'publishedAt' => '2025-04-16T08:30:00Z',
                ],
            ];

            // Simpan berita ke database menggunakan model Berita
            foreach ($articles as $article) {
                Berita::create([
                    'judul' => $article['title'],
                    'konten' => $article['description'],
                    'penulis' => 'Unknown',
                    'sumber' => 'Example Source',
                    'url' => $article['url'],
                    'gambar_url' => $article['urlToImage'],
                ]);
            }


            $berita = Berita::latest()->get();

            if ($request->has('id')) {
                $beritaDetail = Berita::find($request->id);
                return view('news', ['berita' => $berita, 'beritaDetail' => $beritaDetail]);
            }


            return view('home', ['berita' => $berita]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong. ' . $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $berita = Berita::find($id); // Find the news article by its ID

        if (!$berita) {
            return response()->json(['error' => 'News not found.'], 404); // If not found, return an error
        }

        return view('news.show', compact('berita')); // Display the specific article
    }
}
