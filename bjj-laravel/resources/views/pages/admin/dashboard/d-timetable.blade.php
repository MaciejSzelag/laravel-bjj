<section class="dashboard-timetable-wrap">
    @include('pages.admin.dashboard.head',[$titleDashboad= "Timetable"])


    <div class="h-s-wrap-block">
        <h1 class="h1-timetable">Update timetables</h1>
        <h2 class="h2-timetable">Monday</h2>
        <table class="time-table">
            <tr>
                <th>Day of the week </th>
                <th>Class Name</th>
                <th>Start hour</th>
                <th>Start minutes</th>
                <th>Finish hour</th>
                <th>Finish minutes</th>
                <th>Text color</th>
                <th>Background color</th>
                <th colspan="2">Last updates</th>
               
               
            </tr>
         
            @foreach  ($mondays as $monday)
            <tr class="tr-main">
                <td>
                    {{$monday->day_of_the_week}}
                </td>
                <td>
                    {{$monday->class_name}}
                </td>
                <td>
                    {{$monday->start_hours}}
                </td>
                <td>
                    {{$monday->start_minutes}}
                </td>
                <td>
                    {{$monday->end_hours}}
                </td>
                <td>
                    {{$monday->end_minutes}}
                </td>
                <td>
                    {{$monday->text_color}}
                </td>
                <td style="color:{{$monday->text_color}}; background-color: {{$monday->background_color}}">
                    @if($monday->background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($monday->background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($monday->background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($monday->background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($monday->background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td>
                    {{$monday->updated_at}}
                </td>
                <td class="action-btn"><button
                        class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $monday->id])}}">Update</a></button>
                     
                </td>
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClass',['id'=> $monday->id])}}">Delete</a></button></td>


            </tr>
            @endforeach
        </table>
        <h2 class="h2-timetable">Tuesday</h2>
        <table class="time-table">
            <tr>
                <th>Day of the week </th>
                <th>Class Name</th>
                <th>Start hour</th>
                <th>Start minutes</th>
                <th>Finish hour</th>
                <th>Finish minutes</th>
                <th>Text color</th>
                <th>Background color</th>
                <th colspan="2">Last updates</th>
               
               
            </tr>
         
            @foreach  ($tuesdays as $tuesday)
            <tr class="tr-main">
                <td>
                    {{$tuesday->day_of_the_week}}
                </td>
                <td>
                    {{$tuesday->class_name}}
                </td>
                <td>
                    {{$tuesday->start_hours}}
                </td>
                <td>
                    {{$tuesday->start_minutes}}
                </td>
                <td>
                    {{$tuesday->end_hours}}
                </td>
                <td>
                    {{$tuesday->end_minutes}}
                </td>
                <td>
                    {{$tuesday->text_color}}
                </td>
                <td style="color:{{$tuesday->text_color}}; background-color: {{$tuesday->background_color}}">
                    @if($tuesday->background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($tuesday->background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($tuesday->background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($tuesday->background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($tuesday->background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td>
                    {{$tuesday->updated_at}}
                </td>
                <td class="action-btn"><button
                    class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $tuesday->id])}}">Update</a></button>
                </td>
             
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClass',['id'=> $tuesday->id])}}">Delete</a></button></td>

            </tr>
            @endforeach
        </table>
        <h2 class="h2-timetable">Wednesday</h2>
        <table class="time-table">
            <tr>
                <th>Day of the week </th>
                <th>Class Name</th>
                <th>Start hour</th>
                <th>Start minutes</th>
                <th>Finish hour</th>
                <th>Finish minutes</th>
                <th>Text color</th>
                <th>Background color</th>
                <th colspan="2">Last updates</th>
                
            </tr>
         
            @foreach  ($wednesdays as $wednesday)
            <tr class="tr-main">
                <td>
                    {{$wednesday->day_of_the_week}}
                </td>
                <td>
                    {{$wednesday->class_name}}
                </td>
                <td>
                    {{$wednesday->start_hours}}
                </td>
                <td>
                    {{$wednesday->start_minutes}}
                </td>
                <td>
                    {{$wednesday->end_hours}}
                </td>
                <td>
                    {{$wednesday->end_minutes}}
                </td>
                <td>
                    {{$wednesday->text_color}}
                </td>
                <td style="color:{{$wednesday->text_color}}; background-color: {{$wednesday->background_color}}">
                    @if($wednesday->background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($wednesday->background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($wednesday->background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($wednesday->background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($wednesday->background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td>
                    {{$wednesday->updated_at}}
                </td>
                <td class="action-btn"><button
                    class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $wednesday->id])}}">Update</a></button>
                </td>
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClass',['id'=> $wednesday->id])}}">Delete</a></button></td>

            </tr>
            @endforeach
        </table>
        <h2 class="h2-timetable">Thursday</h2>
        <table class="time-table">
            <tr>
                <th>Day of the week </th>
                <th>Class Name</th>
                <th>Start hour</th>
                <th>Start minutes</th>
                <th>Finish hour</th>
                <th>Finish minutes</th>
                <th>Text color</th>
                <th>Background color</th>
                <th colspan="2">Last updates</th>
                
            </tr>
         
            @foreach  ($thursdays as $thursday)
            <tr class="tr-main">
                <td>
                    {{$thursday->day_of_the_week}}
                </td>
                <td>
                    {{$thursday->class_name}}
                </td>
                <td>
                    {{$thursday->start_hours}}
                </td>
                <td>
                    {{$thursday->start_minutes}}
                </td>
                <td>
                    {{$thursday->end_hours}}
                </td>
                <td>
                    {{$thursday->end_minutes}}
                </td>
                <td>
                    {{$thursday->text_color}}
                </td>
                <td style="color:{{$thursday->text_color}}; background-color: {{$thursday->background_color}}">
                    @if($thursday->background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($thursday->background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($thursday->background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($thursday->background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($thursday->background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td>
                    {{$thursday->updated_at}}
                </td>
                <td class="action-btn"><button
                    class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $thursday->id])}}">Update</a></button>
                </td>
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClass',['id'=> $thursday->id])}}">Delete</a></button></td>
             

            </tr>
            @endforeach
        </table>
        <h2 class="h2-timetable">Friday</h2>
        <table class="time-table">
            <tr>
                <th>Day of the week </th>
                <th>Class Name</th>
                <th>Start hour</th>
                <th>Start minutes</th>
                <th>Finish hour</th>
                <th>Finish minutes</th>
                <th>Text color</th>
                <th>Background color</th>
                <th colspan="2">Last updates</th>
       
            </tr>
         
            @foreach  ($fridays as $friday)
            <tr class="tr-main">
                <td>
                    {{$friday->day_of_the_week}}
                </td>
                <td>
                    {{$friday->class_name}}
                </td>
                <td>
                    {{$friday->start_hours}}
                </td>
                <td>
                    {{$friday->start_minutes}}
                </td>
                <td>
                    {{$friday->end_hours}}
                </td>
                <td>
                    {{$friday->end_minutes}}
                </td>
                <td>
                    {{$friday->text_color}}
                </td>
                <td style="color:{{$friday->text_color}}; background-color: {{$friday->background_color}}">
                    @if($friday->background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($friday->background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($friday->background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($friday->background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($friday->background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td>
                    {{$friday->updated_at}}
                </td>
                <td class="action-btn"><button
                    class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $friday->id])}}">Update</a></button>
                </td>
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClass',['id'=> $friday->id])}}">Delete</a></button></td>

            </tr>
            @endforeach
        </table>
        <h2 class="h2-timetable">Saturday</h2>
        <table class="time-table">
            <tr>
                <th>Day of the week </th>
                <th>Class Name</th>
                <th>Start hour</th>
                <th>Start minutes</th>
                <th>Finish hour</th>
                <th>Finish minutes</th>
                <th>Text color</th>
                <th>Background color</th>
                <th colspan="2">Last updates</th>
             
            </tr>
         
            @foreach  ($saturdays as $saturday)
            <tr class="tr-main">
                <td>
                    {{$saturday->day_of_the_week}}
                </td>
                <td>
                    {{$saturday->class_name}}
                </td>
                <td>
                    {{$saturday->start_hours}}saturday
                </td>
                <td>
                    {{$saturday->start_minutes}}
                </td>
                <td>
                    {{$saturday->end_hours}}
                </td>
                <td>
                    {{$saturday->end_minutes}}
                </td>
                <td>
                    {{$saturday->text_color}}
                </td>
                <td style="color:{{$saturday->text_color}}; background-color: {{$saturday->background_color}}">
                    @if($saturday->background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($saturday->background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($saturday->background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($saturday->background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($saturday->background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td>
                    {{$saturday->updated_at}}
                </td>
                <td class="action-btn"><button
                    class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $saturday->id])}}">Update</a></button>
                </td>
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClass',['id'=> $saturday->id])}}">Delete</a></button></td>

            </tr>
            @endforeach
        </table>
    </div>
    <div class="h-s-wrap-block">
        <div class="add-newMember">
            <p>Add a New Class</p>
            <form action="/pages/admin/dashboard/newClassAdded" method="post">

                @csrf
                <label for="" class="time-label">Day of the week<sup>*</sup></label>
                <div class="input-label  ">

                    <select name="day_of_the_week" required class="time-lab">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                </div>
                <label for="" class="time-label">Class Name<sup>*</sup></label>
                <div class="input-label">
                    <input type="text" name="class_name" placeholder="Class Name" required maxlength="50"
                        title="Class Name" class="time-lab">
                </div>

                <label for="" class="time-label">Start time<sup>*</sup></label>
                <div class="input-label">
                    <input type="text" name="start_hours" placeholder="hour" required maxlength="2" class="time"
                        title="hours">
                    <label for="">:</label>
                    <input type="text" name="start_minutes" placeholder="minute" required maxlength="2" class="time"
                        title="minutes">
                </div>
                <label for="" class="time-label ">Finish time<sup>*</sup></label>
                <div class="input-label">
                    <input type="text" name="end_hours" placeholder="hour" required maxlength="2" class="time"
                        title="hours" min="1" max="24">
                    <label for="">:</label>
                    <input type="text" name="end_minutes" placeholder="minute" required maxlength="2" class="time"
                        title="minutes" min="00" max="60">
                </div>
                <label for="" class="time-label">Text color<sup>*</sup></label>
                <div class="input-label">
                    <select name="text_color" required class="time-lab">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                    </select>
                </div>
                <label for="" class="time-label ">Background color<sup>*</sup></label>
                <div class="input-label">
                    <select name="background_color" required class="time-lab">
                        <option value="rgb(0, 100, 17)">Green</option>
                        <option value="rgb(156, 0, 0)">Red</option>
                        <option value="rgb(223, 208, 0)">Yellow</option>
                        <option value="rgb(0, 112, 156)">Blue</option>
                        <option value="rgb(250, 112, 0)">Orange</option>
                    </select>
                </div>


                <div class="input-label">
                    <input type="submit" class="submitMember">
                </div>
            </form>
        </div>
    </div>
    <div class="h-s-wrap-block">

        <h1 class="h1-timetable">Update a class informtion</h1>
     
        <table class="time-table">
            <tr>
                <th>Class title </th>
                <th>Content</th>
                <th>Title text color</th>
                <th>Title background color</th>
                <th colspan="2">Last updates</th>
               
               
            </tr>
         
            @foreach($classInfos as $classInfo)
            <tr class="tr-main">
                <td class="td-big">
                    {{$classInfo->title}}
                </td>
                <td>
                    {{$classInfo->content}}
                </td>

                <td class="td-big">
                    {{$classInfo->title_text_color}}
                </td>
                <td style="color:{{$classInfo->title_text_color}}; background-color: {{$classInfo->title_background_color}}; background-image: {{$classInfo->title_background_color}}" class="td-big">
                    @if($classInfo->title_background_color=="rgb(0, 100, 17)")
                    {{$green}}
                    @elseif($classInfo->title_background_color=="rgb(156, 0, 0)")
                    {{$red}}
                    @elseif($classInfo->title_background_color=="rgb(223, 208, 0)")
                    {{$yellow}}
                    @elseif($classInfo->title_background_color=="rgb(0, 112, 156)") 
                    {{$blue}}
                    @elseif($classInfo->title_background_color=="linear-gradient(-30deg, rgb(82, 96, 224) 50%, rgb(82, 136, 224) 75%, rgb(82, 96, 224) 100%)") 
                    lightblue
                    @elseif($classInfo->title_background_color=="rgb(250, 112, 0)") 
                    {{$orange}}
                    @endif
                </td>
                <td class="td-big">
                    {{$classInfo->updated_at}}
                </td>
                {{-- <td class="action-btn"><button
                        class="edit-btn"><a href="{{route('admin.updateTimetable',['id'=> $classInfo->id])}}">Update</a></button>
                     
                </td> --}}
                <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteClassInformation',['id'=> $classInfo->id])}}">Delete</a></button></td>


            </tr>
            @endforeach
        </table>
    </div>

    <div class="h-s-wrap-block">
        <div class="add-newMember">
            <p>Add a New Class Information</p>
            <form action="/pages/admin/dashboard/newClassInformation" method="post">

                @csrf
                <label for="" class="time-label">Title<sup>*</sup></label>
                <div class="input-label  ">
                    <input type="text" name="title" placeholder="Title" required maxlength="50"
                    title="Title" class="time-lab">
                </div>
                <label for="" class="time-label">Content<sup>*</sup></label>
            
                <textarea type="text" name="content" placeholder="Content" required maxlength="1000"
                        title="Content" class="time-lab" rows="10" cols="50">
                </textarea>
                <label for="" class="time-label">Text color<sup>*</sup></label>
                <div class="input-label">
                    <select name="title_text_color" required class="time-lab">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                    </select>
                </div>
                <label for="" class="time-label ">Background color<sup>*</sup></label>
                <div class="input-label">
                    <select name="title_background_color" required class="time-lab">
                        <option value="rgb(0, 100, 17)">Green</option>
                        <option value="rgb(156, 0, 0)">Red</option>
                        <option value="rgb(223, 208, 0)">Yellow</option>
                        <option value="rgb(0, 112, 156)">Blue</option>
                        <option value="linear-gradient(-30deg, rgb(82, 96, 224) 50%, rgb(82, 136, 224) 75%, rgb(82, 96, 224) 100%)">Light blue</option>
                        <option value="rgb(250, 112, 0)">Orange</option>
                    </select>
                </div>


                <div class="input-label">
                    <input type="submit" class="submitMember" value="Submit a new Class Information">
                </div>
            </form>
        </div>
    </div>

</section>
