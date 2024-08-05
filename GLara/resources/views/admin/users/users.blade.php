@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>

    <div class="mb-3">
        <input type="text" id="search" placeholder="Search" />
        <button id="search-btn">Search</button>
    </div>

    <div class="mb-3">
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">ADD USER</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning">✏️</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">🗑️</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
