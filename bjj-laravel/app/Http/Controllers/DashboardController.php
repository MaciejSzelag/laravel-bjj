<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamMember;

class DashboardController extends Controller
{
     public function dashboardPanel(){
        $title = 'Dashboard |  Ian';
        $member = TeamMember::all()->toArray();
        return view('pages.admin.dashboard', compact('title', 'member'));
    }
    public function addMember(Request $request){

        $request->validate([
            "name"=> 'required',
            "lastName"=> 'required',
            "level"=> 'required',
            "DateOfBirth"=> 'required',
            "DateOfStart"=> 'required',
        ]);
        TeamMember::create($request->all());

        // return back()->with('status','A new member was added!');
        return redirect("/dashboard")->with('status-mamber','A new member has been added!');;
    }
    public function deleteMember($id){
  
       $findIdMember =  TeamMember::find($id);
       $findIdMember->delete();
       return redirect("/dashboard")->with('status-mamber','A  member has been deleted!');

    }
}