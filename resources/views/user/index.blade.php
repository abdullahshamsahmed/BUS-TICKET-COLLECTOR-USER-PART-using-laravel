@extends('layouts.layout')

@section('title')
USER PANEL
@endsection
@section('pageTitel')
  Buy bus tickets
@endsection
@section('warningMsg')
@endsection
@section('view')
<table >
  <tr>
 <h1>welcome {{session("uname")}}<h1>
    <form action="/test" method="post" >
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
      <!-- from -->
      <td style="width:300px">
        <label><h3 style="color:white"><b>From:</b></h3></label>
        <select name="start" id="start" style="width:150px; height:30px">
          <option value="" selected disabled hidden>Select City</option>
          @foreach($ticket as $tickets)
          <option value="{{$tickets->start}}">{{$tickets->start}}</option>
          @endforeach
       </select>
      </td>

    <!-- to -->
    <td style="width:300px">
      <label><h3 style="color:white"><b>To:</b></h3></label>
      <select name="end" id="end" style="width:150px; height:30px" >
        <option value="" selected disabled hidden>Select City</option>
        @foreach($ticket as $tickets)
        <option value="{{$tickets->end}}">{{$tickets->end}}</option>
        @endforeach
      </select>
    </td>
   <!-- time -->
    <td style="width:300px">
      <label><h3 style="color:white"><b>Date:</b></h3></label>
      <select name="date" id="date" style="width:150px; height:30px" >
        <option value="" selected disabled hidden>Select Time</option>
        @foreach($ticket as $tickets)
        <option value="{{$tickets->date}}">{{$tickets->date}}</option>
        @endforeach
      </select>
    </td>



  </tr>
  <!-- submit -->

  <tr >
    <td></td>

    <td align="center">
    </br>

      <input type="submit" name="submit" value="Search Bus" style="background-color: #555;color: #fff;border-radius: 10px; width:100px;height:30px;font-size: 1em;font-family:'Orator Std'" />

    </form>
      <!-- <input type="submit" name="submit" value="Search Bus" style="background-color: #555;color: #fff;border-radius: 10px; width:100px;height:30px;font-size: 1em;font-family:'Orator Std'" /> -->
    </td>
  </tr>
</table>
</br>
</br>
<!-- more details -->
@yield('busdescription')

@endsection
