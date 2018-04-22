@extends('layouts.app')

@section('title','Admin')

@section('page-title','Admin')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->first_name}}</td>
            <td>{{$admin->last_name}}</td>
            <td>{{$admin->username}}</td>
            <td>{{$admin->email}}</td>
            <td>
                <a href="{{URL('admin/'.$admin->username.'/edit')}}" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
