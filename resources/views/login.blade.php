@extends('layouts.layout')
@section('title')
LOGIN
@endsection
              @section('pageTitel')

							<div class="home_title">Login</div>
                @endsection

  @section('warningMsg')
<div>{{session('msg')}}</div>
  @endsection
   @section('view')
								<form method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="text" class=" booking_input" placeholder="Username" required="required" name="username"></br></br>
											<input type="password" class="booking_input" placeholder="Password" required="required" name="password"></br></br></br>

										<input type="submit" class="booking_button" value="Login" name="submit">


								</form>
                @endsection
