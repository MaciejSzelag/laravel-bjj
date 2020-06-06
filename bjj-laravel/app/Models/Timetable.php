<?php

namespace App\Models;

use App\Persistance\EloquentTimetable;


class Timetable 
{
   public function getAllDays(){
       return EloquentTimetable::all();
   }
   public function getByDay(string $weekDay){
       return EloquentTimetable::all()->where('day_of_the_week', $weekDay);
   }
   public function createNewClass($request){
       return EloquentTimetable::create($request->all());
   }
}
