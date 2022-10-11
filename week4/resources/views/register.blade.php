@extends('layouts.app')

@section('title',"Register")

@section('container')
    <form class="regform" action="{{route("register.post")}}" method="post">
        <h3 style="text-align:center">Registration</h3>
        @csrf
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter name">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"  placeholder="Enter email">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"  placeholder="Enter password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="address">Address</label><br>
            <input type="text" name="address" id="address"  placeholder="Enter address">
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="phone">Contact</label><br>
            <input type="number" name="phone" id="phone"  placeholder="Enter contact no">
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary mt-2">Sign up</button>
        </div>
    </form>
@endsection