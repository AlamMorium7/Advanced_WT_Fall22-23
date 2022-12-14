@extends('layouts.app')
@section('title')

    fastcare

@endsection
@section('phpempty')

@endsection
@section('content')
<hr>
<center>
<table>
<tr><td>
<h2>
FastCare
</h2></td></tr></table></center><hr>
<center><table cellspacing="3" cellspacing="3" border="1" style="width:64%">
<tr><td><h3><a href="/login">Login</a></h3></td><td><h3><a href="/admit">Admit</a></h3></td><td><h3><a href="/ambulance">Emergency Ambulance</a></h3></td><td><h3><a href="/delete">Delete Patient</a></h3></td><td><h3><a href="/doctor">Doctor</a></h3></td></tr>
</table></center>
<center><img src="{{ URL('images/fastcare1.jpg') }}" alt="fastcare1"></center>
@endsection
