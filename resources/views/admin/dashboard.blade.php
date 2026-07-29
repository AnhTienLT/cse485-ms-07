<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop Admin — Dashboard</title>
</head>
<body>
    <h1>MiniShop Admin — Dashboard</h1>

    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.categories.index') }}">Categories</a>
        <a href="{{ route('admin.products.index') }}">Products</a>
        <a href="{{ route('admin.about') }}">About</a>
    </nav>

    <h2>Overview</h2>
    <ul>
        <li>Categories: <span data-testid="stat-categories">{{ $stats['categories'] }}</span></li>
        <li>Products: <span data-testid="stat-products">{{ $stats['products'] }}</span></li>
        <li>Inventory value: <span data-testid="stat-inventory">{{ $stats['inventory_value'] }}</span></li>
    </ul>
</body>
</html>
