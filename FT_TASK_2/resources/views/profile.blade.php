@extends('layouts.app')
@section('title')

    Profilepage

@endsection
@section('phpempty')

@endsection
@section('content')

<h2>
{{ session()->get('PName') }}
</h2>
<br> 
@endsection
@section('contentlogout')
<hr>
<input type="submit" name="logout" value="logout">
<hr>
@endsection




