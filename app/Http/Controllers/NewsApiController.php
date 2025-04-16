<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Berita;
use Carbon\Carbon;

class NewsApiController extends Controller
{
    public function getNews()
    {
        try {
            // Buat instance dari Guzzle client
            $client = new Client();

            // URL dan API Key
            $url = 'https://newsapi.org/v2/everything';
            $apiKey = '13b04ee72d4a4b00b02e6a11d52b55b3';  // Ganti dengan API Key Anda

            // Kirim permintaan ke API
            $response = $client->request('GET', $url, [
                'query' => [
                    'q' => 'Apple',
                    'from' => '2025-04-15',
                    'sortBy' => 'popularity',
                    'apiKey' => $apiKey
                ]
            ]);

            // Mengambil hasil response dalam bentuk JSON
            $data = json_decode($response->getBody()->getContents(), true);

            // Loop untuk menyimpan setiap artikel ke dalam database
            foreach ($data['articles'] as $article) {
                Berita::create([
                    'judul' => $article['title'],
                    'konten' => $article['content'],
                    'penulis' => $article['author'] ?? null,
                    'sumber' => $article['source']['name'] ?? null,
                    'url' => $article['url'],
                    'gambar_url' => $article['urlToImage'],
                    'published_at' => $article['publishedAt'] ? Carbon::parse($article['publishedAt']) : null,
                ]);
            }

            // Kirim data ke view 'home'
            return view('home', ['articles' => $data['articles']]);
        } catch (\Exception $e) {
            // Tangani jika terjadi kesalahan
            return response()->json(['error' => 'Something went wrong. ' . $e->getMessage()], 500);
        }
    }
}
