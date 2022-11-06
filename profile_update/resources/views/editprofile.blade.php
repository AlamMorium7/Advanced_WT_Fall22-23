@extends('layouts.app')

@section('title',"User Edit")

@section('container')
    <h1>This is Edit Page</h1>
    <form action="{{route("updateprofile")}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{session("user")["id"]}}">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="{{session("user")["name"]}}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="{{session("user")["email"]}}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="age">Age</label><br>
            <input type="text" name="age" id="age" value="{{session("user")["age"]}}">
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-success" type="submit">Update Profile</button>
        </div>
    </form>
@endsection
