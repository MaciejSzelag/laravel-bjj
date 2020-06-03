<section class="dashboard-home-wrap">
    @include('pages.admin.dashboard.head',[$titleDashboad= "Timetable"])
 
        <div class="h-s-wrap-block">
            <div class="alert">
                @if (session('status-mamber'))
                <div class="alert-success-member"  id="alertMember">
                    <span id="closeAlert">close</span>
                    {{ session('status-mamber') }}
                </div>
                @endif
            </div>
            <div class="add-newMember">
                <p>Add a New Class</p>
            
    
                <form action="/pages/admin/dashboard/newClassAdded" method="post">

                    @csrf
                    <label for="" class="time-label">Day of the week<sup>*</sup></label>
                    <div class="input-label  ">
                      
                            <select name="day_of_the_week" required  class="time-lab">
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                    </div>
                    <label for="" class="time-label">Class Name</label>
                    <div class="input-label">
                            <input type="text" name="class_name" placeholder="Class Name" required maxlength="50"   title="Class Name" class="time-lab">
                    </div>
                
                    <label for="" class="time-label">Start time</label>
                    <div class="input-label">
                            <label for="">Start:</label>
                            <input type="text" name="start_hours" placeholder="hour" required maxlength="2" class="time"  title="hours">
                            <label for="">:</label>
                            <input type="text" name="start_minutes" placeholder="minute" required maxlength="2"  class="time"  title="minutes">
                    </div>
                    <label for="" class="time-label ">Finish time</label>
                    <div class="input-label">
                            <label for="">Finish:</label>
                            <input type="text" name="end_hours" placeholder="hour" required maxlength="2" class="time"  title="hours" min="1" max="24">
                            <label for="">:</label>
                            <input type="text" name="end_minutes" placeholder="minute" required maxlength="2"  class="time"  title="minutes" min="00" max="60">
                    </div>
                    <label for="" class="time-label">Text color</label>
                    <div class="input-label">
                        <select name="text_color" required  class="time-lab">
                            <option value="white">White</option>
                            <option value="black">Black</option>
                        </select>
                    </div>
                    <label for="" class="time-label ">Background color</label>
                    <div class="input-label">
                        <select name="background_color" required  class="time-lab">
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

    
</section>