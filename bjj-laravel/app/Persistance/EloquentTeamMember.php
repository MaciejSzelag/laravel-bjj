<?php

namespace App\Persistance;

use Illuminate\Database\Eloquent\Model;

class EloquentTeamMember extends Model
{
    protected $table = 'team_members';

    protected $fillable = ["name", "last_name", "level", "date_of_birth", "start_date"];
}