@extends('layouts.app')
@section('title')

    Patient Admit

@endsection
@section('phpempty')

@endsection
@section('contentadmit')
<table>
<tr><td>
<h2>
Patient Admit
</h2></td></tr>
<tr><td>
<h4>
	Patient ID:
</h4></td><td>
<h4>
Password:
</h4>
</td></tr>
	<tr><td>
<h2>
	<input type="text" name="P_ID" value="{{old('P_ID')}}">
</h2></td><td>
<h2>
<input type="password" name="P_Password" value="{{old('P_Password')}}">
</h2>
</td></tr>

<tr><td>
<h4>
	@if ($errors->has('P_ID'))
    <span class="">
        <strong>
            {{ $errors->first('P_ID') }}
</strong>
</span>
    @endif
</h4></td><td>
<h4>
@if ($errors->has('P_Password'))
    <span class="">
        <strong>
            {{ $errors->first('P_Password') }}
</strong>
</span>
    @endif
</h4>
</td></tr>

<tr><td>
<h4>
	Patient Name:
</h4></td><td>
<h4>
Confirm Password:
</h4>
</td></tr>
	<tr><td>
<h2>
	<input type="text" name="PName" value="{{old('PName')}}">
</h2></td><td>
<h2>
<input type="password" name="confirm_password" value="{{old('confirm_password')}}">
</h2>
</td></tr>

<tr><td>
<h4>
	@if ($errors->has('PName'))
    <span class="">
        <strong>
            {{ $errors->first('PName') }}
</strong>
</span>
    @endif
</h4></td><td>
<h4>
@if ($errors->has('confirm_password'))
    <span class="">
        <strong>
            {{ $errors->first('confirm_password') }}
</strong>
</span>
    @endif
</h4>
</td></tr>

<tr><td>
<h4>
	Gender:
</h4></td><td>
<h4>
MobileNo:
</h4>
</td></tr>
	<tr><td>
<h2>
<select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</h2></td><td>
<h2>
<input type="text" name="PMobile" value="{{old('PMobile')}}">
</h2>
</td></tr>

<tr><td>
<h4>
	@if ($errors->has('Gender'))
    <span class="">
        <strong>
            {{ $errors->first('Gender') }}
</strong>
</span>
    @endif
</h4></td><td>
<h4>
@if ($errors->has('PMobile'))
    <span class="">
        <strong>
            {{ $errors->first('PMobile') }}
</strong>
</span>
    @endif
</h4>
</td></tr>

<tr><td>
<h4>
	Patient Location:
</h4></td></tr>
	<tr><td>
<h2>
	<textarea name="PLocation" placeholder="Enter Location">{{ old('PLocation') }}</textarea>
</h2></td></tr>

<tr><td>
<h4>
	@if ($errors->has('PLocation'))
    <span class="">
        <strong>
            {{ $errors->first('PLocation') }}
</strong>
</span>
    @endif
</h4></td></tr>

<tr><td>
<h2>
<input type="submit" name="Insert" value="Insert">

<input type="submit" name="Update" value="Update">
</h2></td></tr>
</table>	
	
	

   
@endsection


@section('phpfill')

<?php
if(isset($_REQUEST["Insert"])){
    $P_ID=$_REQUEST['P_ID'];
$PName=$_REQUEST['PName'];
$PLocation=$_REQUEST['PLocation'];
$P_Password=$_REQUEST['P_Password'];
$PMobile=$_REQUEST['PMobile'];
$Gender=$_REQUEST['Gender'];


echo "<h3>Patient ID is:".$P_ID."<br>Patient Name:";
echo $PName."<br>Patient Location:";
echo $PLocation."<br>Patient Password:";
echo $P_Password."<br>Patient MobileNo:";
echo $PMobile."<br>Patient Gender:";
echo $Gender."</h3>";
    }
    if(isset($_REQUEST["Update"])){
        $P_ID=$_REQUEST['P_ID'];
    $PName=$_REQUEST['PName'];
    $PLocation=$_REQUEST['PLocation'];
    $P_Password=$_REQUEST['P_Password'];
    $PMobile=$_REQUEST['PMobile'];
    $Gender=$_REQUEST['Gender'];
    
    
    echo "<h3>Patient ID is:".$P_ID."<br>Patient Name:";
    echo $PName."<br>Patient Location:";
    echo $PLocation."<br>Patient Password:";
    echo $P_Password."<br>Patient MobileNo:";
    echo $PMobile."<br>Patient Gender:";
    echo $Gender."</h3>";
        }
?>
@endsection