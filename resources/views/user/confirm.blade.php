@extends('layouts.layout')
@section('pageTitel')

@endsection
@section('warningMsg')
@endsection
@section('view')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="js/check.js"></script>
</head>
<body>
<!-- <div>{{session('msg')}}</div> -->
  <form  action="/done" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="text" name="busid" value="{{$description->id}}" style="display: none">
    <label for="seatT">Total Seat: </label>
    <input type="text" name="seatT" id="seatT" value="{{$seatselect}}" readonly="readonly" >
    <label for="seatno">Seat Position: </label>
    @foreach($result as $results)
    <input type="checkbox" name="seatno[]" value="{{$results}}" checked>{{$results}}

    @endforeach</br>
    <label for="amount">Amount: </label>
    <input type="text" name="amount" id="amount" value="{{$amount}}" readonly="readonly" >
    <label for="payment">Payment Method: </label>
    <input type="radio" name="payment" id="payment" value="Bkash">Bkash
    <input type="radio" name="payment" id="payment" value="Bank">Bank
  </br>

    <label for="username">User Name: </label>
    <input type="text" name="username" id="username" value="{{session("uname")}}" readonly="readonly" >
      <label for="company">Company Name: </label>
      <input type="text" name="company" id="company" value="{{$description->company}}" readonly="readonly" ></br>

      <label for="from">From: </label>
      <input type="text" name="start" id="start" value="{{$description->start}}" readonly="readonly" >
      <label for="to">To: </label>
      <input type="text" name="end" id="end" value="{{$description->end}}" readonly="readonly" ></br>
      <label for="time">Time: </label>
      <input type="text" name="time" id="time" value="{{$description->departingTime}}" readonly="readonly" >
      <label for="date">Date: </label>
      <input type="text" name="date" id="date" value="{{$description->date}}" readonly="readonly" ></br>

        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

      <input type="submit" name="submit" id="submit" value="Submit"/>
  </form>

</body>
</htm>
@endsection
