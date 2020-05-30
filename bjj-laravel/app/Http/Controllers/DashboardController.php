<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\UpdatePrice;
use App\UpdatePrivatePrices;
use App\UpdateKidsPrice;

class DashboardController extends Controller
{
    private $teamMembers;


    public function __construct(
        TeamMember $teamMembers
    )
    {
        $this->teamMembers = $teamMembers;
    }


    public function dashboardPanel()
    {
        $title = 'Content Management System';

        $members = $this->teamMembers->getAllMembers();

        $length = $members->count();

        // $whiteBelts = TeamMember::where('level', 'white')->count();
        $whiteBelts = $this->teamMembers->getCountByLevel('white');
        $blueBelts = $this->teamMembers->getCountByLevel('blue');
        $purpleBelts = $this->teamMembers->getCountByLevel('purple');
        $brownBelts = $this->teamMembers->getCountByLevel('brown');
        $blackBelts = $this->teamMembers->getCountByLevel('black');

        $prices = UpdatePrice::all()->toArray();
        $privatePrices = UpdatePrivatePrices::all()->toArray();
        $kidsPrice = UpdateKidsPrice::all()->toArray();

        #dd($whiteBelts, $blueBelts);
        return view('pages.admin.dashboard', compact('title', 'members', 'length', 'whiteBelts', 'blueBelts', 'purpleBelts', 'brownBelts', 'blackBelts', 'prices', 'privatePrices', 'kidsPrice'));
    }

    public function addMember(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "lastName" => 'required',
            "level" => 'required',
            "DateOfBirth" => 'required',
            "DateOfStart" => 'required',
        ]);
        TeamMember::create($request->all());
        return redirect("/dashboard")->with('status-mamber', 'A new member has been added!');
    }

    public function deleteMember($id)
    {

        $findIdMember = TeamMember::find($id);
        $findIdMember->delete();
        return redirect("/dashboard")->with('status-mamber', 'A  member has been deleted!');

    }

    public function updateMember($id)
    {
        $findIdMember = TeamMember::find($id);

        return view("/pages/admin/updateMember")->with('findIdMember', $findIdMember);
    }

    public function saveUpdate(Request $request, $id)
    {
        $findIdMember = TeamMember::find($id);
        $findIdMember->name = $request->name;
        $findIdMember->lastName = $request->lastName;
        $findIdMember->DateOfBirth = $request->DateOfBirth;
        $findIdMember->level = $request->level;
        $findIdMember->DateOfStart = $request->DateOfStart;
        $findIdMember->save();
        return redirect('/dashboard')->with('status-mamber', 'A  member has been updated!');
    }


}
