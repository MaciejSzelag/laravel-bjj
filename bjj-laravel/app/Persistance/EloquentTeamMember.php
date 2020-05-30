<?php

namespace App\Persistance;

use Illuminate\Database\Eloquent\Model;

class EloquentTeamMember extends Model
{
    protected $table = 'team_members';

    protected $fillable = ["name", "lastName", "level", "DateOfBirth", "DateOfStart"];
}
