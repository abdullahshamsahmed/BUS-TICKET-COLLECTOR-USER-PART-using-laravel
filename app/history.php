<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{

    //protected $primaryKey = 'busId';
      protected $fillable=["userId","seatNo","amount","busId","start","end","time","date"];

  
}
