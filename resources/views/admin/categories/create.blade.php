@extends('layouts.admin')

@section('title', 'MiniShop Admin — Them moi Category')
@section('page_heading', 'Them moi Category')

@section('content')
    <div class="card">
        <p>Đây là placeholder cho màn hình tạo Category trong P07.</p>
        <form action="#" method="POST">
            @csrf
            <button type="submit" class="btn">Luu demo</button>
        </form>
    </div>
@endsection
