<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Carbon\Carbon;

class NewsApiController extends Controller
{
    public function getNews()
    {
        try {
            // Dummy Data Artikel Berita dengan Gambar dan Detail
            $articles = [
                [
                    'title' => 'Penurunan Harga Properti di Jakarta',
                    'description' => 'Artikel ini mengungkapkan faktor-faktor yang menyebabkan penurunan harga properti di Jakarta.',
                    'url' => 'https://www.example.com',
                    'urlToImage' => 'https://via.placeholder.com/400x300.png?text=Penurunan+Harga+Properti',  // URL Gambar
                    'publishedAt' => '2025-04-15T12:54:24Z',
                ],
                [
                    'title' => 'Kebijakan Pemerintah dalam Mengurangi Karbon',
                    'description' => 'Pemerintah Indonesia baru-baru ini mengeluarkan kebijakan untuk mengurangi emisi karbon.',
                    'url' => 'https://www.example.com',
                    'urlToImage' => 'https://via.placeholder.com/400x300.png?text=Kebijakan+Pemerintah',  // URL Gambar
                    'publishedAt' => '2025-04-16T08:30:00Z',
                ],
            ];

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

            // Kirim data ke view 'home'
            return view('home', ['articles' => $articles]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong. ' . $e->getMessage()], 500);
        }
    }
}
