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
  <title>Create factory</title>
</head>
<body>

    <form action="/comments/comments/{{$description->driverid}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>

      <label for="id">Driver Name:</label>
      <input type="text" name="id" value="{{$driver->name}}"></br>
      <label for="Comment">Comment:</label></br>
    <textarea name="comment" cols="40" rows="5"></textarea></br>
      Bus Rating  <input type="radio" name="rating" value="5">5 STAR
      <input type="radio" name="rating" value="4">4 STAR
      <input type="radio" name="rating" value="3">3 STAR
      <input type="radio" name="rating" value="2">2 STAR
       <input type="radio" name="rating" value="1">1 STAR</br> </br>

   <input type="hidden" name="_token" value="{{csrf_token()}}" />

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</htm>

@endsection
