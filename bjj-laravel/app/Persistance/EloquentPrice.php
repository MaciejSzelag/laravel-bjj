<?php

namespace App\Persistance;

use Illuminate\Database\Eloquent\Model;


class EloquentPrice  extends Model
{
    protected $table = 'pricing_plans';

    protected $fillable = ["type_id", "plan_name", "description", "price", "frenquency"];
}