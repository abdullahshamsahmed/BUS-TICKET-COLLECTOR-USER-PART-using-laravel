@extends(' user.index')

@section('busdescription')


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Read</title>
<style>
  .betag table,.betag thead,.betag th,.betag tr,.betag td{
    border-collapse: collapse;
    border: 1px solid blue;
    padding-left: 1.5em;
    text-align: middle;
  }
</style>
</head>
<body>
<!-- {{session("uname")}} -->
<input type="search" onkeyup="search()" class="form-control" id="search" >
</br>
<table class="betag" sytle="width:100%" bgcolor="white">
  <thead>
      <th>Bus Id</th>
      <th>COMPANY NAME</th>
      <th>DEPARTING TIME</th>
      <th>COACH NO</th>
      <th>STARTING COUNTER</th>
      <th>END COUNTER</th>

      <th>Price Per Seat</th>
      <th>VIEW</th>
      <th>More details</th>

 </thead>
@foreach ($detail as $details)
  <tr>
    <td>{{$details->id}}</td>
    <td>{{$details->company}}</td>
    <td>{{$details->departingTime}}</td>
    <td>{{$details->coachNo}}</td>
    <td>{{$details->startingCounter}}</td>
    <td>{{$details->endCounter}}</td>
    <td>{{$details->price}}</td>

    <td><a href="seat/{{$details->id}}">Position</a></td>
    <td><a href="busDetails/{{$details->driverid}}">details</a></td>

  </tr>
@endforeach
</table>
<!-- again -->
<table class="beta" sytle="width:100%,display:none" bgcolor="white">
  <th>
    <tr>
      <td>company</td>
      <td>stand</td>
    </tr>
  </th>
  <tbody id="success">
  </tbody>

</table>
</body>
</htm>
<script type="text/javascript">
  function search()
  {


    var search=$('#search').val();
    if (search)
    {
      $(".betag").hide();
      $(".beta").show();

    }
    else
      {
        $(".beta").hide();
        $(".betag").show();
      }
    $.ajax({
        type:"POST",
        url:'{{URL::to("/search")}}',
        data:
        {
          search:search,
           _token: '{!! csrf_token() !!}',
        },
        datatype:'html',
        success:function (response)
        {
          console.log(response);
          $("#success").html(response);
        }

    });
  }
</script>

@endsection
