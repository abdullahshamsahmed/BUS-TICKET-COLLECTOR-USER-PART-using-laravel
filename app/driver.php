<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $fillable=["image","name","lnumber","cc","description","rating","comment"];
}
