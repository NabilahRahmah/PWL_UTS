<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MorniesController extends Controller
{
    // Function untuk halaman tentang kami
    public function tentang()
    {
        return view('tentang');
    }

    // Function untuk halaman penghargaan
    public function penghargaan()
    {
        $mornies = [
            [
                'title' => 'Juara 2 Podcast Inspiratif',
                'description' => 'Kami meraih juara 2 dalam Podcast Inspiratif tingkat nasional.',
                'image' => 'podcast_inspiratif.jpg'
            ],
            [
                'title' => 'Finalis BPC EcoLife',
                'description' => 'Kami terpilih menjadi finalis di BPC EcoLife.',
                'image' => 'bpc_ecolife.jpg'
            ],
            [
                'title' => 'Finalis Essay Idea',
                'description' => 'Kami berhasil menjadi finalis dalam kompetisi Essay Idea.',
                'image' => 'essay_idea.jpg'
            ]
        ];

        return view('penghargaan', compact('mornies'));
    }
}
