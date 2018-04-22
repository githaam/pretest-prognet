@extends('layouts.app')

@section('title','Edit Admin')

@section('page-title','Edit Admin')

@section('dashboard-content')

<form action="{{URL('admin/'.$admin->username)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}
    <div class="form-group">
        <label for="username">Username</label><br>
        <input type="text" name="username" class="form-control" id="username" value="{{$admin->username}}" disabled>
    </div>
    <div class="form-group">
        <label for="firstname">Nama Depan</label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="{{$admin->first_name}}">
    </div>
    <div class="form-group">
        <label for="lastname">Nama Belakang</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="{{$admin->last_name}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{$admin->email}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection