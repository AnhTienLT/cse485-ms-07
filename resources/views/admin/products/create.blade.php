@extends('layouts.admin')

@section('title', 'MiniShop Admin — Them moi Product')
@section('page_heading', 'Them moi Product')

@section('content')
    <div class="card">
        <p>Đây là placeholder cho màn hình tạo Product trong P07.</p>
        <form action="#" method="POST">
            @csrf
            <button type="submit" class="btn">Luu demo</button>
        </form>
    </div>
@endsection
