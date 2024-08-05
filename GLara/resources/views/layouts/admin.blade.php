<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .admin-panel {
            display: flex;
            height: 100vh;
        }
        
        .sidebar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        
        /* You can add more styles for header and body divs here */
    </style>
</head>
<body>
    <div class="admin-panel">
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.permissions') }}">Permissions</a></li>
                <li><a href="{{ route('admin.roles') }}">Roles</a></li>
                <li><a href="{{ route('admin.users') }}">Users</a></li>
                <li><a href="{{ route('admin.menus') }}">Menus</a></li>
                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                <li><a href="{{ route('admin.media') }}">Media</a></li>
            </ul>
        </div>
        
        <div class="content">
            <div class="header">
                </div>
            <div class="body">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
