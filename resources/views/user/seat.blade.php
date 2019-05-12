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
  <div>{{session('msg')}}</div>
  <form id="formcheck" action="seat/{{$description->id}}" method="POST" enctype="multipart/form-data">

      <input type="hidden" name="_token" value="{{csrf_token()}}"/>

      <input type="checkbox" name="seat[]" value="A1"onclick="count()"{{in_array("A1",$result)?"disabled":"true"}}>A1
      <input type="checkbox" name="seat[]" value="A2"onclick="count()"{{in_array("A2",$result)?"disabled":"true"}}>A2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="A3"onclick="count()"{{in_array("A3",$result)?"disabled":"true"}}>A3
      <input type="checkbox" name="seat[]" value="A4"onclick="count()"{{in_array("A4",$result)?"disabled":"true"}}>A4</br>
      <input type="checkbox" name="seat[]" value="B1"onclick="count()"{{in_array("B1",$result)?"disabled":"true"}}>B1
      <input type="checkbox" name="seat[]" value="B2"onclick="count()"{{in_array("B2",$result)?"disabled":"true"}}>B2
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="B3"onclick="count()"{{in_array("B3",$result)?"disabled":"true"}}>B3
      <input type="checkbox" name="seat[]" value="B4"onclick="count()"{{in_array("B4",$result)?"disabled":"true"}}>B4</br>
      <input type="checkbox" name="seat[]" value="C1"onclick="count()"{{in_array("C1",$result)?"disabled":"true"}}>C1
      <input type="checkbox" name="seat[]" value="C2"onclick="count()"{{in_array("C2",$result)?"disabled":"true"}}>C2
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="C3"onclick="count()"{{in_array("C3",$result)?"disabled":"true"}}>C3
      <input type="checkbox" name="seat[]" value="C4"onclick="count()"{{in_array("C4",$result)?"disabled":"true"}}>C4</br>
      <input type="checkbox" name="seat[]" value="D1"onclick="count()"{{in_array("D1",$result)?"disabled":"true"}}>D1
      <input type="checkbox" name="seat[]" value="D2"onclick="count()"{{in_array("D2",$result)?"disabled":"true"}}>D2
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="D3"onclick="count()"{{in_array("D3",$result)?"disabled":"true"}}>D3
      <input type="checkbox" name="seat[]" value="D4"onclick="count()"{{in_array("D4",$result)?"disabled":"true"}}>D4</br>
      <input type="checkbox" name="seat[]" value="E1"onclick="count()"{{in_array("E1",$result)?"disabled":"true"}}>E1
      <input type="checkbox" name="seat[]" value="E2"onclick="count()"{{in_array("E2",$result)?"disabled":"true"}}>E2
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
      <input type="checkbox" name="seat[]" value="E3"onclick="count()"{{in_array("E3",$result)?"disabled":"true"}}>E3
      <input type="checkbox" name="seat[]" value="E4"onclick="count()"{{in_array("E4",$result)?"disabled":"true"}}>E4</br>
      <input type="checkbox" name="seat[]" value="F1"onclick="count()"{{in_array("F1",$result)?"disabled":"true"}}>F1

      <input type="checkbox" name="seat[]" value="F2"onclick="count()"{{in_array("F2",$result)?"disabled":"true"}}>F2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
      <input type="checkbox" name="seat[]" value="F3"onclick="count()"{{in_array("F3",$result)?"disabled":"true"}}>F3
      <input type="checkbox" name="seat[]" value="F4"onclick="count()"{{in_array("F4",$result)?"disabled":"true"}}>F4</br>
      <input type="checkbox" name="seat[]" value="G1"onclick="count()"{{in_array("G1",$result)?"disabled":"true"}}>G1
      <input type="checkbox" name="seat[]" value="G2"onclick="count()"{{in_array("G2",$result)?"disabled":"true"}}>G2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="G3"onclick="count()"{{in_array("G3",$result)?"disabled":"true"}}>G3
      <input type="checkbox" name="seat[]" value="G4"onclick="count()"{{in_array("G4",$result)?"disabled":"true"}}>G4</br>
      <input type="checkbox" name="seat[]" value="H1"onclick="count()"{{in_array("H1",$result)?"disabled":"true"}}>H1
      <input type="checkbox" name="seat[]" value="H2"onclick="count()"{{in_array("H2",$result)?"disabled":"true"}}>H2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="H3"onclick="count()"{{in_array("H3",$result)?"disabled":"true"}}>H3
      <input type="checkbox" name="seat[]" value="H4"onclick="count()"{{in_array("H4",$result)?"disabled":"true"}}>H4</br>
      <input type="checkbox" name="seat[]" value="I1"onclick="count()"{{in_array("I1",$result)?"disabled":"true"}}>I1
      <input type="checkbox" name="seat[]" value="I2"onclick="count()"{{in_array("I2",$result)?"disabled":"true"}}>I2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="I3"onclick="count()"{{in_array("I3",$result)?"disabled":"true"}}>I3
      <input type="checkbox" name="seat[]" value="I4"onclick="count()"{{in_array("I4",$result)?"disabled":"true"}}>I4</br>
      <input type="checkbox" name="seat[]" value="J1"onclick="count()"{{in_array("J1",$result)?"disabled":"true"}}>J1
      <input type="checkbox" name="seat[]" value="J2"onclick="count()"{{in_array("J2",$result)?"disabled":"true"}}>J2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="J3"onclick="count()"{{in_array("J3",$result)?"disabled":"true"}}>J3
      <input type="checkbox" name="seat[]" value="J4"onclick="count()"{{in_array("J4",$result)?"disabled":"true"}}>J4</br>
      <input type="checkbox" name="seat[]" value="K1"onclick="count()"{{in_array("K1",$result)?"disabled":"true"}}>K1
      <input type="checkbox" name="seat[]" value="K2"onclick="count()"{{in_array("K2",$result)?"disabled":"true"}}>K2
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="checkbox" name="seat[]" value="K3"onclick="count()"{{in_array("K3",$result)?"disabled":"true"}}>K3
      <input type="checkbox" name="seat[]" value="K4"onclick="count()"{{in_array("K4",$result)?"disabled":"true"}}>K4
    </br>



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
