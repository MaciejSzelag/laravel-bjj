<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeamMember;
use App\Models\PricingPlans;
use App\Models\Timetable;
use App\Models\TimetableClassInformation;

class DashboardController extends Controller
{

    public function __construct(TeamMember $teamMembers,PricingPlans $PricingPlans, Timetable $Timetables,TimetableClassInformation $classinfo ){
        $this->teamMembers = $teamMembers; 
        $this->PricingPlans = $PricingPlans; 
        $this->Timetable = $Timetables;
        $this->TimetableClassInformation = $classinfo;
    }

     public function dashboardPanel(){
        $title = 'Content Management System';

        $members = $this->teamMembers->getAllMembers();
        $length = $members->count();
        $mondays = $this->Timetable->getByDay('Monday');
        $tuesdays = $this->Timetable->getByDay('Tuesday');
        $wednesdays = $this->Timetable->getByDay('Wednesday');
        $thursdays = $this->Timetable->getByDay('Thursday');
        $fridays = $this->Timetable->getByDay('Friday');
        $saturdays = $this->Timetable->getByDay('Saturday');

        $red= 'Red';
        $green= 'Green';
        $orange = 'Orange';
        $yellow = 'Yellow';
        $blue = 'Blue';

        $classInfos = $this->TimetableClassInformation->getAllClassInformation();

        $whiteBelts = $this->teamMembers->getCountByLevel('white');
        $blueBelts = $this->teamMembers->getCountByLevel('blue');
        $purpleBelts = $this->teamMembers->getCountByLevel('purple');
        $brownBelts = $this->teamMembers->getCountByLevel('brown');
        $blackBelts = $this->teamMembers->getCountByLevel('black');
        $privates = $this->PricingPlans->getPriceByTypeId('private');
        $adults = $this->PricingPlans->getPriceByTypeId('adult');
        $kids = $this->PricingPlans->getPriceByTypeId('kid');
        return view('pages.admin.dashboard', compact(
            'title',
            'members',
            'length',
            'whiteBelts',
            'blueBelts',
            'purpleBelts',
            'brownBelts',
            'blackBelts',
            'privates',
            'adults',
            'kids',
            'mondays',
            'tuesdays',
            'wednesdays',
            'thursdays',
            'fridays',
            'saturdays',
            'red',
            'green',
            'orange',
            'yellow',
            'blue',
            'classInfos'));
     }

     public function addMember(Request $request){
        $request->validate([
            "name" => 'required',
            "last_name" => 'required',
            "level" => 'required',
            "date_of_birth" => 'required',
            "start_date" => 'required',
        ]);
        $this->teamMembers->createNewMember($request);
          return redirect("/dashboard")->with('status-mamber','A new member has been added!');
    }
    public function deleteMember($id){
  
       $findIdMember =  $this->teamMembers->getAllMembers()->find($id);
       $findIdMember->delete();
       return redirect("/dashboard")->with('status-mamber','A  member has been deleted!');

    }

    public function updateMember($id){
        $findIdMember = $this->teamMembers->getAllMembers()->find($id);
      
        return view("/pages/admin/updateMember")->with('findIdMember',$findIdMember);
    }
    public function saveUpdate(Request $request, $id){
        $findIdMember = $this->teamMembers->getAllMembers()->find($id);
        $findIdMember->name = $request->name;
        $findIdMember->last_name = $request->last_name;
        $findIdMember->date_of_birth = $request->date_of_birth;
        $findIdMember->level = $request->level;
        $findIdMember->start_date = $request->start_date;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber','The member has been updated!');
    }
  

}