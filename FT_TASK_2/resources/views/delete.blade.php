@extends('layouts.app')
@section('title')

    Patient Delete

@endsection
@section('phpempty')

@endsection
@section('contentDelete')
<hr>
<table>
<tr><td>
<input type="text" name="PName" value="{{old('PName')}}">
<input type="submit" name="Delete" value="Delete">
</td></tr>
</table>
<hr>
@endsection