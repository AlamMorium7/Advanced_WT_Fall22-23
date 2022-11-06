@extends('layouts.app')

@section('title',"User Dashboard")

@section('container')
    <h1>This is Dashboard Page</h1>
    <h2>Welcome {{session("user")["name"]}}</h2></h2>
    <h3>{{session("user")["email"]}}</h3>
    <h3>{{session("user")["age"]}}</h3>
    <a href="{{route("editprofile")}}" class="btn btn-primary">Edit Profile</a>
    <a href="{{route("logout")}}" class="btn btn-danger">Logout</a>
@endsection