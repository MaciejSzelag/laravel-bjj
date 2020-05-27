<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdatePrice extends Model
{
    protected $fillable = ["planName","description","price","frenquency" ];
}
