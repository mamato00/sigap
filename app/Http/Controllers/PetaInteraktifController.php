<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaInteraktifController extends Controller
{
    private $images = [
        [
            'path' => '/peta/KlasterIKP.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ],
        [
            'path' => '/peta/AKP1.png',
            'description' => 'Peta Produksi Padi per Kabupaten/Kota'
        ],
        [
            'path' => '/peta/AKP2.png',
            'description' => 'Peta Ketersediaan Jagung per Wilayah'
        ],
        [
            'path' => '/peta/AKP3.png',
            'description' => 'Peta Distribusi Kedelai Nasional'
        ],
        [
            'path' => '/peta/AKP4.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ],
        [
            'path' => '/peta/AKP5.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ],
        [
            'path' => '/peta/APP1.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ],
        [
            'path' => '/peta/APP2.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ],
        [
            'path' => '/peta/APP3.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ],
        [
            'path' => '/peta/APP4.png',
            'description' => 'Peta Ketahanan Pangan Regional'
        ]
    ];

    public function index()
    {
        return view('peta-interaktif.index', [
            'images' => $this->images
        ]);
    }

    public function getImage(Request $request)
    {
        $index = $request->input('index', 0);

        if ($index < 0 || $index >= count($this->images)) {
            return response()->json(['error' => 'Invalid index'], 400);
        }

        return response()->json([
            'image' => $this->images[$index],
            'current' => $index,
            'total' => count($this->images)
        ]);
    }

    public function getAllImages()
    {
        return response()->json([
            'images' => $this->images,
            'total' => count($this->images)
        ]);
    }
}
