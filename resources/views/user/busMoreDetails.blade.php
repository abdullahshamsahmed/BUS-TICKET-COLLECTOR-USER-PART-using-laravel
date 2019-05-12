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
  <title>Update</title>
  <style>
      .d table,.d thead, th,.d tr,.d td{
        border-collapse: collapse;
        border: 1px solid blue;
        padding-left: 1.5em;
        text-align: middle;
      }
  </style>
</head>
<body>
  <form action="busDetails/{{$description->driverid}}" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <img src="{{URL::to('/driver_image/'.$driver->image)}}" alt="" width="180px" hieght="180px"></br></br>
          <label for="name">Name: </label></br>
          <input type="type" name="name" id="name" value="{{$driver->name}}" readonly></br>
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <label for="rating">Rating:</label></br>
          <input type="text" name="rating" id="rating" value="{{$driver->rating}}" readonly></br>
          <label for="lnumber">Lisence Number:</label></br>
          <input type="text" name="lnumber" id="lnumber" value="{{$driver->lnumber}}" readonly></br>

        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

      <td>
        <table class="d" sytle="width:100%">
            <thead>
                <th>Customer Name</th>
                <th>Comment about Driver</th>


           </thead>
@foreach($comment as $comments)
            <tr>

              <td>{{$comments->username}}</td>
              <td>{{$comments->comment}}</td>



            </tr>
  @endforeach

        </table>
      </td>
    </table>




      <input type="submit" name="submit" id="submit" value="Submit"/>
  </form>
</body>
</htm>

@endsection
