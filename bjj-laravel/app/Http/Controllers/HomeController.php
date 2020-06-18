<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\newPost;

use App\Models\TeamMember;
use App\Models\pricingPlans;
use App\Models\timetable;
use App\Models\timetableClassInformation;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(users $users, newPost $newPost, teamMember $teamMembers, pricingPlans $pricingPlans, timetable $timetables, timetableClassInformation $timetableClassInformation )
    {
        $this->middleware('auth');
        $this->users = $users;
        $this->newPost = $newPost;
        $this->teamMembers = $teamMembers; 
        $this->pricingPlans = $pricingPlans; 
        $this->timetable = $timetables;
        $this->timetableClassInformation = $timetableClassInformation;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function index()
        {


            // Get the currently authenticated user...
            $user = Auth::user();

            // Get the currently authenticated user's ID...
            $id = Auth::id();
            $level_access = $user->user_level_id;

            // add user level
            // add it compact itd

            // dd($level_access , $id);

            $newPosts = $this->newPost->getAllPosts();

            //----------------------------------------------------

            $title = 'Content Management System';
            $members = $this->teamMembers->getAllMembers();
            $length = $members->count();
            $mondays = $this->timetable->getByDay('Monday');
            $tuesdays = $this->timetable->getByDay('Tuesday');
            $wednesdays = $this->timetable->getByDay('Wednesday');
            $thursdays = $this->timetable->getByDay('Thursday');
            $fridays = $this->timetable->getByDay('Friday');
            $saturdays = $this->timetable->getByDay('Saturday');
    
            $red= 'Red';
            $green= 'Green';
            $orange = 'Orange';
            $yellow = 'Yellow';
            $blue = 'Blue';
    
            $classInfos = $this->timetableClassInformation->getAllClassInformation();
    
            $whiteBelts = $this->teamMembers->getCountByLevel('white');
            $blueBelts = $this->teamMembers->getCountByLevel('blue');
            $purpleBelts = $this->teamMembers->getCountByLevel('purple');
            $brownBelts = $this->teamMembers->getCountByLevel('brown');
            $blackBelts = $this->teamMembers->getCountByLevel('black');
            $privates = $this->pricingPlans->getPriceByTypeId('private');
            $adults = $this->pricingPlans->getPriceByTypeId('adult');
            $kids = $this->pricingPlans->getPriceByTypeId('kid');

            //----------------------------------------------------
            if($level_access == 1){
                return view('home', compact('newPosts'))->with('status', 'You are logged in!');
            }else if($level_access == 2){

                return view('home',compact(
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
                    'classInfos',
                    'newPosts'))->with('status', 'You are logged in!');
            }






           
          
        }
        public function addNewPost(Request $request){
                $request->validate([
                    'auth_name' => 'required',
                    'content' => 'required'
                ]);
                $this->newPost->createNewPost($request);
                return redirect('/home')->with('status', 'A new post has been added');
        }
}
