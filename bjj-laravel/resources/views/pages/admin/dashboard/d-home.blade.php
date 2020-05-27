<section class="dashboard-home-wrap">
    @include('\pages\admin\dashboard\head',[$titleDashboad= "Home"])
    <div class="home-statistics">
        <div class="h-s-wrap-top">
            <div class="s1 reg-users">
                               <div class="s1-title">
                     <h1>Team members</h1>
                </div>
                <div class="s1-details">
                    <div class="s1det">
                    <p>{{$length}}</p>
                </div>
               </div>
            </div>
            <div class="s1 ">       
                <div class="s1-title">
                    <h1>Visitors</h1>
               </div>
               <div class="s1-details">
                <div class="s1det">
                    <p>Last week</p>
                    <p>10</p>
                </div>
               </div>
            </div>
            <div class="s1 ">       
                <div class="s1-title">
                    <h1>Logged Users</h1>
               </div>
               <div class="s1-details">
                    <div class="sd"> 
                        <p>Last week</p>
                        <p>10</p>
                    </div>
                    <div class="sd">
                        <p>Today</p>
                        <p>10</p>
                    </div>
               </div>
            </div>
        </div>

    </div>
    <div class="h-s-wrap-block">
        <h1>Checkmat Plymouth</h1>
        <div class="alert">
            @if (session('status-mamber'))
            <div class="alert-success-member"  id="alertMember">
                <span id="closeAlert">close</span>
                {{ session('status-mamber') }}
            </div>
            @endif
        </div>
        <div class="add-newMember">
            <p>Add new member</p>
        

            <form action="/pages/admin/dashboard/newMemberAdded" method="post">
                @csrf
                <div class="input-label">
                    <label for="">Name:<sup>*</sup></label>
                    <input type="text" name="name" placeholder="Name" required maxlength="50"  title="Name">
                </div>
                <div class="input-label">
                    <label for="">Surname:<sup>*</sup></label>
                    <input type="text" name="lastName" placeholder="Surname" required maxlength="50" title="Surname">
                </div>
                <div class="input-label">
                    <label for="">Level:<sup>*</sup></label>
                    <input type="text" name="level" value="White" placeholder="Level" required >
                    <datalist id="color-belts">
                        <option value="white">
                        <option value="blue">
                        <option value="purple">
                        <option value="brown">
                        <option value="black">
                      </datalist>
                </div>
                <div class="input-label">
                    <label for="">Date of birth:<sup>*</sup></label>
                    <input type="date" name="DateOfBirth" placeholder="Date of birth" required maxlength="8" >
                </div>
                <div class="input-label">
                    <label for="">Start date:<sup>*</sup></label>
                    <input type="date" name="DateOfStart" placeholder="Start date" required maxlength="8">
                </div>
                <div class="input-label">
                   
                    <input type="submit" class="submitMember">
                </div>
            </form>
        </div>
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
                <th colspan="2">action</th>
            </tr>


            
            @foreach ($member as $mem)
     
            <tr class="tr-length">
                <td>
                     {{$mem['name']}}
                </td>
                <td>
                    {{$mem['lastName']}}
                </td>
                <td class="td-color" style="border-left: 10px solid {{$mem['level']}} ">
                    {{$mem['level']}}
                </td>
                <td>
                    {{$mem['DateOfStart']}}
                </td>

                <td>
                    {{$mem['DateOfBirth']}}
                </td>

                <td>
                    {{$mem['updated_at']}}
                </td>
                
                <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updateMember',['id'=> $mem['id']])}}">Update</a></button></td>
                 <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteMember',['id'=> $mem['id']])}}">Delete</a></button></td>
           
            </tr>
    
            @endforeach 
        </table>

 

    </div>
</section>