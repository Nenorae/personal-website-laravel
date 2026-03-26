<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan Model Product sudah dibuat
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar semua produk.
     */
    public function index()
    {
        // Untuk sementara, kita coba tampilkan data dummy dulu
        $products = [
            ['nama' => 'Produk A', 'harga' => 10000],
            ['nama' => 'Produk B', 'harga' => 20000],
        ];

        // Ganti baris di atas dengan baris ini jika Model Product sudah ada
        // $products = Product::all();

        return view('products.index', ['products' => $products]);
    }
}
