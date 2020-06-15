<?php

namespace App\Persistance;

use Illuminate\Database\Eloquent\Model;

class EloquentnewPost extends Model
{
    protected $table = 'new_post';

    protected $fillable = ['auth_name','content'];
}
