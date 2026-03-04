@extends('layouts.master') @section('title', 'Trang Bài 1') @section('main-content') <h1>Xin chào {{ $name }}, {{ $age }} tuổi</h1>
    <p>Trường: {{ $school }}</p>
@endsection