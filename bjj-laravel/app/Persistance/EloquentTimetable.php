<?php

namespace App\Persistance;

use Illuminate\Database\Eloquent\Model;


class EloquentTimetable  extends Model
{
    protected $table = 'timetable';

    protected $fillable = ["day_of_the_week", "start_hours", "start_minutes", "end_hours", "end_minutes","class_name","text_color","background_color"];
}