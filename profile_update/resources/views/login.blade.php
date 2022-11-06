@extends('layouts.app')

@section('title',"Register")



@section('container')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>This is Login Page</h1>
    <form action="{{route("login.post")}}" method="post">
        @csrf
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="{{old("email")}}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" value="{{old("password")}}">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary mt-2">Sign up</button>
        </div>
    </form>
@endsection