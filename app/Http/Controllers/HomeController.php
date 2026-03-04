<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $data = [
        'name' => 'Nguyen Vu Anh', 
        'age' => 20, 
        'school' => 'Đại học dien luc'
    ];

    // PHẢI CÓ biến $data ở đây thì bên View mới hiểu $name là gì
    return view('welcome', $data); 
}
public function multiplication($n) {
    // Kiểm tra xem $n có phải là số hay không
    if (!is_numeric($n)) {
        $error = "Giá trị '$n' không phải là số hợp lệ!";
        return view('cuu-chuong', compact('error'));
    }
    
    // Nếu là số, truyền $n sang view
    return view('cuu-chuong', compact('n'));
}
}