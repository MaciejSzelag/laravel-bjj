<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
   protected $fillable = ["name","lastName","level","DateOfBirth","DateOfStart" ];
}