<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MiniShop Admin')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f7f8fb; color: #222; }
        .admin-shell { display: flex; min-height: 100vh; }
        .sidebar { width: 240px; background: #1f2937; color: white; padding: 20px; box-sizing: border-box; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 10px 0; }
        .sidebar a.active { font-weight: bold; color: #fbbf24; }
        .main { flex: 1; display: flex; flex-direction: column; }
        .topbar { background: white; padding: 16px 24px; border-bottom: 1px solid #e5e7eb; }
        .content { padding: 24px; }
        .card { background: white; padding: 16px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); margin-bottom: 16px; }
        .stats { display: flex; gap: 16px; flex-wrap: wrap; }
        .stat { background: #eff6ff; padding: 16px; border-radius: 8px; min-width: 180px; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { border: 1px solid #e5e7eb; padding: 10px; text-align: left; }
        .btn { display: inline-block; padding: 8px 12px; background: #2563eb; color: white; text-decoration: none; border-radius: 4px; }
        .alert { padding: 10px 12px; border-radius: 4px; margin-bottom: 16px; }
        .alert-success { background: #dcfce7; color: #166534; }
        @media (max-width: 768px) { .admin-shell { flex-direction: column; } .sidebar { width: 100%; } }
    </style>
</head>
<body>
    <div class="admin-shell">
        <aside class="sidebar">
            <h2>MiniShop</h2>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">Categories</a>
            <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">Products</a>
            <a href="{{ route('admin.about') }}" class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">About</a>
        </aside>

        <div class="main">
            <header class="topbar">
                <h1>@yield('page_heading', 'MiniShop Admin')</h1>
            </header>

            <main class="content">
                @include('partials.flash')
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
