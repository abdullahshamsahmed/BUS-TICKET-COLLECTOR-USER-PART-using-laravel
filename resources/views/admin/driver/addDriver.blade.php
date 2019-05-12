@extends('layouts.layout')
@section('pageTitel')
Add Driver
@endsection
@section('warningMsg')
@endsection
@section('view')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create</title>
</head>
<body>

    <form action="storedriver" method="post" enctype="multipart/form-data">
<input type="hidden"  name="_token" value="{{csrf_token()}}"/>
      Driver Photo:
      <input type="file" name="image"></br></br>

      <label for="name">Driver Name:</label>
      <input type="text" name="name" value=""></br></br>

      <label for="lnumber">License Number:</label>
      <input type="text" name="lnumber" value=""></br></br>


      control capacity:
      <input type="radio" name="cc" value="big">big bus
      <input type="radio" name="cc" value="medium">medium bus
      <input type="radio" name="cc" value="small">small bus
      </br></br>

      <label for="details">Description:</label></br>
      <textarea name="description" cols="40" rows="5"></textarea></br></br>

<input type="hidden" name="_token" value="{{csrf_token()}}" />

        <input type="submit" name="submit" value="Submit">

    </form>



</body>
</htm>
@endsection
