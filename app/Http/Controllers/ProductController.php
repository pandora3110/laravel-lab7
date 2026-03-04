<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list() {
        // Tạo một mảng danh sách sản phẩm
        $products = [
            ['name' => 'iPhone 15', 'price' => 25000000],
            ['name' => 'Oppo A15', 'price' => 3500000],
            ['name' => 'Macbook M3', 'price' => 45000000],
            ['name' => 'Chuột Logitech', 'price' => 500000],
        ];
        
        // Truyền mảng $products sang view 'products'
        return view('products', compact('products'));
    }
}