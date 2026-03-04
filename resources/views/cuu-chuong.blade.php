@extends('layouts.master')

@section('title', 'Bảng cửu chương ' . ($n ?? 'Lỗi'))

@section('main-content')
<div class="container mt-4" style="font-family: Arial, sans-serif;">
    {{-- 1. Kiểm tra nếu có lỗi (không phải là số) --}}
    @if(isset($error))
        <div style="padding: 20px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
            <strong>Thông báo:</strong> {{ $error }}
        </div>
    @else
        {{-- 2. Nếu là số hợp lệ thì in bảng cửu chương --}}
        <div style="border: 1px solid #007bff; border-radius: 8px; width: 250px; overflow: hidden;">
            <div style="background: #007bff; color: white; padding: 10px; text-align: center;">
                <h3 style="margin: 0;">Bảng cửu chương {{ $n }}</h3>
            </div>
            <div style="padding: 15px; background: #fff;">
                {{-- Dùng vòng lặp @for theo đúng yêu cầu đề bài --}}
                @for ($i = 1; $i <= 10; $i++)
                    <div style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">
                        {{ $n }} x {{ $i }} = <strong>{{ $n * $i }}</strong>
                    </div>
                @endfor
            </div>
        </div>
    @endif

    <br>
    <a href="{{ url('/') }}" style="color: #007bff; text-decoration: none;">← Quay lại trang chủ</a>
</div>
@endsection