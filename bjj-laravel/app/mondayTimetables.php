<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mondayTimetables extends Model
{
    protected $fillable = ["startHour","StartMinutes","endHour","endMinutes","className","classColor","textColor"];
}
