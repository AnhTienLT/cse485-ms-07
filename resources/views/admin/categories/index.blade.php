@extends('layouts.admin')

@section('title', 'MiniShop Admin — Categories')
@section('page_heading', 'MiniShop Admin — Categories')

@section('content')
    <div class="card">
        <a href="{{ route('admin.categories.create') }}" class="btn">Them moi</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- fake data P07; thay Eloquent P09–11 -->
                <tr>
                    <td>1</td>
                    <td>Dien thoai</td>
                    <td>Smartphone</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Laptop</td>
                    <td>Laptop</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Phu kien</td>
                    <td>Accessories</td>
                    <td>Edit</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
