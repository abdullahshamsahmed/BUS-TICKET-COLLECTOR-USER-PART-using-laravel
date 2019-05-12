<?php

namespace App\Http\Controllers;
use App\confirm;
use App\history;
use App\description;
use App\driver;
use App\comment;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller

{

  public function insertcomment($id)
    {
      $driver=driver::find($id);

      $comment=new comment;

      $comment->comment=Input::get("comment");
      $comment->driverid=$driver->id;

      $name=session('uname');
      $comment->username=$name;

      $comment->save();
       return"done";

    }
  public function hist()
  {
      $driver=driver::all();
      $description=description::all()->first();
      $confirm=confirm::all()->where('username',session('uname'));
      return view("user.history",compact("confirm","description"));
  }
  public function search(Request $request)
  {
    if ($request->search){
      $searchs=DB::table('descriptions')
      ->where ('company','like','%'.$request->search.'%')
      ->orWhere('start','like','%'.$request->search.'%')
      ->get();

      if ($searchs)
      {
        foreach($searchs as $key=>$search)
        {
          echo '<tr><td>'.$search->company.'</td><td>'.$search->start.'</td></tr>';
        }
      }
    }
  }
  public function lastView(Request $req)
  {
    //
    // $description=DB::table('descriptions')->where('id', $req->busid)
    //     ->first();

    $description=description::find($req->busid);


    $description->bookedSeatNo=implode(",",Input::get("seatno"));
      //UPDATE description SET bookedSeatNo=CONCAT(bookedSeatNo, ', $description->bookedSeatNo');
    $description->save();


    $confirm=new confirm;
    $confirm->busId=Input::get("busid");
    $confirm->username=Input::get("username");
    $confirm->company=Input::get("company");
    $confirm->totalseat=Input::get("seatT");
    $confirm->seatNo=implode(",",$req->seatno);
    $confirm->amount=Input::get("amount");
    $confirm->paymethod=Input::get("payment");
    $confirm->start=Input::get("start");
    $confirm->end=Input::get("end");
    $confirm->time=Input::get("time");
    $confirm->date=Input::get("date");
    $confirm->save();

return view("user.last");
  }
  public function totalamount(Request $req,$id)
  {

  $history=history::find($id);
  $result=explode(',',$history->seatNo);
  return dd($result);
  $description=description::find($id);
  $seatselect=count($req->seat);
    if(count($req->seat)>3)
    {
    return redirect()->to('seat/'.$id)->with('msg', 'Sorry! you can take maximum 3 seat at a time..');
    }
  //  return view("user.confirm",compact("description","seatselect","history","result"));
  }
  public function history(Request $req,$id)
  {

    $history=new history;
    $history->username=Input::get("username");
    $history->seatNo=implode(",",Input::get("seat"));

    $history->busId=Input::get("busId");
    $history->start=Input::get("start");
    $history->end=Input::get("end");
    $history->time=Input::get("time");
    $history->date=Input::get("date");
    $history->save();
    $result=explode(',',$history->seatNo);

    $description=description::find($id);
    $seatselect=count($req->seat);
    $amount=$seatselect*$description->price;

      if(count($req->seat)>3)
      {
      return redirect()->to('seat/'.$id)->with('msg', 'Sorry! you can take maximum 3 seat at a time..');
      }
    return view("user.confirm",compact("description","seatselect","history","result","amount"));

  }

  public function seat(Request $req,$id)
    {
      $ticket=description::all();
        $detail = DB::table('descriptions')->where('start', $req->start)
            ->where('end', $req->end)
            ->where('date', $req->date)
            ->get();

      $description=description::find($id);

      $result=explode(',',$description->bookedSeatNo);
      return view("user.seat",compact("detail","ticket","description","result"));
    }

    public function index(Request $req){
      if (session('type')=="user"&& session('uname'))
      {
        $ticket=description::all();
  	   return view("user.index",compact("ticket"));
      }
     else{
       $req->session()->flash('msg', "Invalid username/password");
       return redirect('/login');
     }
    }
    public function busdescription(Request $req){
      $description=description::all()->first();
      $ticket=description::all();
        $detail = DB::table('descriptions')->where('start', $req->start)
            ->where('end', $req->end)
            ->where('date', $req->date)
            ->get();
      return view("user.busdescription",compact("detail","ticket","description"));
    }
    public function comments($id)
    {
      $description=DB::table('descriptions')->where('driverid', $id)->first();;

      $driver=DB::table('drivers')->where('id', $id)->first();
      $comment=comment::find($id);
      return view("user.comment",compact("comment","driver","description"));
    }
    public function driver($id)
    {

       $comment=DB::table('comments')->where('driverid', $id)->get();
      // dd($comment);
      $description=description::all()->first();
      $driver=driver::find($id);

      return view("user.busMoreDetails",compact("driver","description","comment"));
    }

    public function verify(Request $req){
        $user = DB::table('user')->where('username', $req->username)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('uname', $user->username);
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

    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    	     	return redirect('/login');

    	}
    }
}
