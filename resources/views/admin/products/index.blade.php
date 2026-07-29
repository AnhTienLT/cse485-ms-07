@extends('layouts.admin')

@section('title', 'MiniShop Admin — Products')
@section('page_heading', 'MiniShop Admin — Products')

@section('content')
    <div class="card">
        <a href="{{ route('admin.products.create') }}" class="btn">Them moi</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- fake data P07; thay Eloquent P09–11 -->
                <tr>
                    <td>1</td>
                    <td>iPhone 15</td>
                    <td>Dien thoai</td>
                    <td>24990000</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>MacBook Air</td>
                    <td>Laptop</td>
                    <td>28990000</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>AirPods</td>
                    <td>Phu kien</td>
                    <td>4990000</td>
                    <td>Edit</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
