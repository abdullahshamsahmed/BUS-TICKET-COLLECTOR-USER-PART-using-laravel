<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class description extends Model
{
    //protected $primaryKey = 'busId';
    protected $fillable=["start","end","company","departingTime","coachNo","startingCounter","endCounter","availableSeat","bookedSeatNo","date","price"];
    public $timestamps = false;
}
