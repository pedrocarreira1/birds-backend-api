<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $imageUrls = [
            asset('images/image1.webp'),
            asset('images/image2.webp'),
            asset('images/image3.webp'),
            asset('images/image4.webp'),
        ];

        return response()->json($imageUrls);
    }
}
