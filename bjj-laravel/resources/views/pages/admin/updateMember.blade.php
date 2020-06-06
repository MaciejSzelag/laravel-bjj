@extends('layouts\admin\adminApp', ['title' => "Update"])
<section class="dashboard-home-wrap">
    <div class="h-s-wrap-block">
        <h1>Checkmat Plymouth</h1>
        <div class="add-newMember">
            <p>Update the member</p>
        <form action="{{route('pages.admin.update', ['id' => $findIdMember->id])}}" method="post">
                @csrf 
                <div class="input-label">
                    <label for="">Name:</label>
                <input type="text" name="name" placeholder="Name" value="{{ $findIdMember->name }}" required>
                </div>
                <div class="input-label">
                    <label for="">Surname:</label>
                    <input type="text" name="last_name" placeholder="Surname" value="{{ $findIdMember->last_name }}" required>
                </div>
                <div class="input-label">
                    <label for="">Date of birth:</label>
                    <input type="text" name="date_of_birth" placeholder="Date of birth"  value="{{ $findIdMember->date_of_birth }}" required>
                </div>
                <div class="input-label">
                    <label for="">Level:</label>                
                    <input type="text" name="level" placeholder="Level"  value="{{ $findIdMember->level }}" autofocus required>
                </div>
            
                <div class="input-label">
                    <label for="">Start date:</label>
                    <input type="text" name="start_date" placeholder="Start date"  value="{{ $findIdMember->start_date }}" required>
                </div>
                <div class="input-label">
                   
                    <input type="submit" class="submitMember">
                </div>
            </form>
         </div>
    </div>
</section>