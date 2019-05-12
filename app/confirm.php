<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confirm extends Model
{
    protected $fillable=["busId","username","company","seatNo","amount","paymethod","start","end","time","coachNo","date"];
}
