<section class="dashboard-home-wrap">
    @include('\pages\admin\dashboard\head',[$titleDashboad= "Home"])
    <div class="home-statistics">
        <div class="h-s-wrap-top">
            <div class="s1 reg-users">
                               <div class="s1-title">
                     <h1>Registered users</h1>
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
                    <label for="">Name:</label>
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="input-label">
                    <label for="">Surname:</label>
                    <input type="text" name="lastName" placeholder="Surname" required>
                </div>
                <div class="input-label">
                    <label for="">Level:</label>
                    <input type="text" name="level" value="White" placeholder="Level" required>
                </div>
                <div class="input-label">
                    <label for="">Date of birth:</label>
                    <input type="text" name="DateOfBirth" placeholder="Date of birth" required>
                </div>
                <div class="input-label">
                    <label for="">Start date:</label>
                    <input type="text" name="DateOfStart" placeholder="Start date" >
                </div>
                <div class="input-label">
                   
                    <input type="submit" class="submitMember">
                </div>

              
            </form>
         
        </div>

        <h1>Team members</h1>

        <table>
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
     
            <tr>
                <td>
                     {{$mem['name']}}
                </td>
                <td>
                    {{$mem['lastName']}}
                </td>
                <td class="td-color" style="background-color:{{$mem['level']}}">
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
                
                {{-- <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updateMember',['id'=> $mem['id']])}}">Update</a></button></td> --}}
            <td class="action-btn"><button class="delete-btn"><a href="{{route('admin.deleteMember',['id'=> $mem['id']])}}">Delete</a></button></td>
           
            </tr>
    
            @endforeach 
        </table>

 

    </div>
</section>