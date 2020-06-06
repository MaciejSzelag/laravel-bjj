<?php

namespace App\Models;

use App\Persistance\EloquentTeamMember;

class TeamMember 
{
   public function getAllMembers(){
      return EloquentTeamMember::all();
   }

   //strict typing
   public function getCountByLevel(string $level){
      return EloquentTeamMember::where('level', $level)->count();
   }
   public function createNewMember($request){
    return  EloquentTeamMember::create($request->all());
   }
}
