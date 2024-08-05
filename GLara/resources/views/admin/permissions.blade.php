@extends('layouts.admin')

<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@section('content')
    <div class="container">

        <div class="admin-panel">
            <div class="sidebar">
                </div>
            <div class="content">
                <div class="header">
                    </div>
                <div class="body">
                    </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Permissions
                        <div class="float-right">
                            <button type="button" class="btn btn-primary btn-sm">Add Permission</button>
                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                            <button type="button" class="btn btn-primary btn-sm">Search</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin User</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
