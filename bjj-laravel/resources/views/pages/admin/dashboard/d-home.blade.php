<section class="dashboard-home-wrap">
    @include('pages.admin.dashboard.head',[$titleDashboad= "Home"])
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
    
        <table>
            <caption><h1>The summary of all belts </h1></caption>
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
                    <input type="text" name="last_name" placeholder="Surname" required maxlength="50" title="Surname">
                </div>
                <div class="input-label">
                    <label for="">Level:<sup>*</sup></label>
                        <select name="level" id="color-belts" required >
                            <option value="white">white</option>
                            <option value="blue">blue</option>
                            <option value="purple">purple</option>
                            <option value="brown">brown</option>
                            <option value="black">black</option>
                        </select>
                </div>
                <div class="input-label">
                    <label for="">Date of birth:<sup>*</sup></label>
                    <input type="date" name="date_of_birth" placeholder="Date of birth" required maxlength="8" max="{{date('Y-m-d', strtotime('-6 years'))}}">
                </div>
                <div class="input-label">
                    <label for="">Start date:<sup>*</sup></label>
                    <input type="date" name="start_date" placeholder="Start date" required maxlength="8" max="{{date('Y-m-d')}}">
                </div>
                <div class="input-label">
                    <input type="submit" class="submitMember">
                </div>
            </form>
        </div>

    </div>
</section>