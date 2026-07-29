@extends('layouts.admin')

@section('title', 'MiniShop Admin — Dashboard')
@section('page_heading', 'MiniShop Admin — Dashboard')

@section('content')
    <div class="card">
        <h2>Overview</h2>
        <div class="stats">
            <div class="stat">
                <strong>Categories</strong>
                <div data-testid="stat-categories">{{ $stats['categories'] }}</div>
            </div>
            <div class="stat">
                <strong>Products</strong>
                <div data-testid="stat-products">{{ $stats['products'] }}</div>
            </div>
            <div class="stat">
                <strong>Inventory value</strong>
                <div data-testid="stat-inventory">{{ $stats['inventory_value'] }}</div>
            </div>
        </div>
    </div>
@endsection
