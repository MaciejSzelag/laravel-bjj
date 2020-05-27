<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdatePrivatePrices extends Model
{
    protected $fillable = ["planName","description","price","frenquency" ];
}
