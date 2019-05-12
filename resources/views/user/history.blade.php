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
  <title>Read</title>
  <style>
      table,thead,th,tr,td{
        border-collapse: collapse;
        border: 1px solid blue;
        padding-left: 1.5em;
        text-align: middle;
      }
  </style>
</head>
<body>
  <h1>select list</h1></br>
</br>



  <table sytle="width:100%">
  <thead>
          <th>company name</th>
          <th>total seat</th>
          <th>total cost</th>
          <th>Payment method</th>
          <th>from</th>
          <th>to</th>
          <th>time</th>
          <th>date</th>
          <th>Add Comments</th>




     </thead>
      @foreach($confirm as $confirms)
      <tr>
        <td>{{$confirms->company}}</td>
        <td>{{$confirms->totalseat}}</td>
        <td>{{$confirms->	amount}}</td>
        <td>{{$confirms->	paymethod}}</td>
        <td>{{$confirms->start}}</td>
        <td>{{$confirms->end}}</td>
        <td>{{$confirms->time}}</td>
        <td>{{$confirms->date}}</td>
        <td><a href="comments/{{$description->driverid}}">Comments</a></td>



      @endforeach

  </table>

</body>
</htm>

@endsection
