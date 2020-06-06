<section class="dashboard-members-wrap">
    @include('pages.admin.dashboard.head',[$titleDashboad= "Members"])
    
    <div class="h-s-wrap-block">
       <h1>The summary </h1>
        <table>
            <caption><h1>Belts</h1></caption>
            <tr>
                <th>White</th>
                <th>Blue</th>
                <th>Purple</th>
                <th>Brown</th>
                <th>Black</th>
            </tr>
            <tr>
                <td>{{$whiteBelts}}</td>
                <td>{{$blueBelts}}</td>
                <td>{{$purpleBelts}}</td>
                <td>{{$brownBelts}}</td>
                <td>{{$blackBelts}}</td>
            </tr>
        </table>

        <table>
            <caption>  <h1>Team members (<span>{{$length}}</span>)</h1></caption>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Level</th>
                <th>Start date</th>
                <th>Date of Birth</th>
                <th>Last updates</th>
                <th colspan="2">Action</th>
            </tr>
           
            @foreach ($members as $member)
                 <tr class="tr-length">
                    <td>
                        {{$member->name}}
                    </td>
                    <td>
                        {{$member->last_name}}
                    </td>
                    <td class="td-color" style="border-left: 10px solid {{$member->level}} ">
                        {{$member->level}}
                    </td>
                    <td>
                        {{$member->start_date}}
                    </td>
                    <td>
                        {{$member->date_of_birth}}
                    </td>
                    <td>
                        {{$member->updated_at}}
                    </td>
                    <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updateMember',['id'=> $member->id])}}">Update</a></button></td>
                    <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteMember',['id'=> $member->id])}}">Delete</a></button></td>
                 </tr>
            @endforeach 
        </table>
    </div>
</section>
