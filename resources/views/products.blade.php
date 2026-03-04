@extends('layouts.master')

@section('title', 'Danh sách sản phẩm')

@section('main-content')
    <h2>Danh sách sản phẩm từ Controller</h2>
    <table border="1" cellpadding="10" style="border-collapse: collapse;">
        @foreach($products as $p)
        <tr>
            <td>{{ $p['name'] }}</td>
            <td style="color: {{ $p['price'] > 10000000 ? 'red' : 'black' }}">
                {{ number_format($p['price']) }} VNĐ
            </td>
        </tr>
        @endforeach
    </table>
@endsection