<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginVerify extends Controller
{
  /*  public function index(){

        //$users = User::all();

        //var_dump($users);

    	return view('admin.index');
    }
*/
    public function verify(Request $req){


/*        $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();*/

        $user = DB::table('users')->where('username', $req->username)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('uname', $user->username);
            $req->session()->put('type', $user->type);

            if ($user->type=="admin") {
              return redirect()->route('admin.index');
            }


            if ($user->type=="seller") {
              return redirect()->route('seller.index');
            }


            if ($user->type=="user") {
              return redirect()->route('user.index');
            }
    		return redirect()->route('admin.index');
        //echo $user->username;
      //echo session('uname');
    	}else{


    		return redirect('/login');
            //return view('login.index');
    	}
    }
}
