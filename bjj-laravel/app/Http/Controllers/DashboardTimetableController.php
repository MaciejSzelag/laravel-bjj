<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timetable;
use App\Models\TimetableClassInformation;

class DashboardTimetableController extends Controller
{
    public function __construct(Timetable $timetable,TimetableClassInformation $classinfo)
    {
        $this->Timetable = $timetable;
        $this->TimetableClassInformation = $classinfo;
        
      }
    public function addNewClass(Request $request){
      $request->validate([
        "day_of_the_week" => 'required',
        "start_hours" => 'required',
        "start_minutes" => 'required',
        "end_hours" => 'required',
        "end_minutes" => 'required',
        "class_name" => 'required',
        "text_color" => 'required',
        "background_color" => 'required'
      ]);
        $this->Timetable->createNewClass($request);
        return redirect("/dashboard")->with('status-mamber','The new class has been added!');
    }

    public function addNewClassInformation(Request $request){
      $request->validate([
        'title' =>'required',
        'content' =>'required',
        'title_text_color' =>'required',
        'title_background_color' =>'required'

      ]);
      $this->TimetableClassInformation->createNewClassInformation($request);
      return redirect('/dashboard')->with('status-mamber', 'The new class information has benn added');

    }
    public function deleteClass($id){
  
      $findIdMember =  $this->Timetable->getAllDays()->find($id);
      $findIdMember->delete();
      return redirect("/dashboard")->with('status-mamber','The class has been deleted!');

   }
   public function deleteClassInformation($id){
     $findIdMember = $this->TimetableClassInformation->getAllClassInformation()->find($id);
     $findIdMember->delete();
     return redirect('/dashboard')->with('status-mamber','The class information has been deleted!');
   }

   public function updatedClass($id){
    $findIdMember =  $this->Timetable->getAllDays()->find($id);
    return view("/pages/admin/updateTimetable")->with('findIdMember',$findIdMember);
   }
   public function saveUpdatedClass(Request $request, $id){
    $findIdMember =  $this->Timetable->getAllDays()->find($id);
    $findIdMember->day_of_the_week = $request->day_of_the_week;
    $findIdMember->start_hours = $request->start_hours;
    $findIdMember->start_minutes = $request->start_minutes;
    $findIdMember->end_hours = $request->end_hours;
    $findIdMember->end_minutes =  $request->end_minutes;
    $findIdMember->class_name = $request->class_name;
    $findIdMember->text_color = $request->text_color;
    $findIdMember->background_color = $request->background_color;
    $findIdMember->save();
    return redirect('/dashboard')->with('status-mamber','The class has been updated!');
   }
}
