<?php

namespace App\Models;

use App\Persistance\EloquentTimetableClassInformation;

class TimetableClassInformation 
{
    public function getAllClassInformation(){
        return EloquentTimetableClassInformation::all();
    }
    public function createNewClassInformation($request){
        return EloquentTimetableClassInformation::create($request->all());
    }
}