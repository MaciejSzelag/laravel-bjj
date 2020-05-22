@extends('layouts\admin\adminApp', ['title' => "Update"])
<section class="dashboard-home-wrap">
    <div class="h-s-wrap-block">
        <h1>Checkmat Plymouth</h1>
        <div class="add-newMember">
            <p>Update</p>
        <form action="{{route('admin.update.save.updateMember', ['id' => $findIdMember->id ])}}" method="post">
                @csrf 
                <div class="input-label">
                    <label for="">Name:</label>
                <input type="text" name="name" placeholder="Name" value="{{ $findIdMember->name }}">
                </div>
                <div class="input-label">
                    <label for="">Surname:</label>
                    <input type="text" name="lastName" placeholder="Surname" value="{{ $findIdMember->lastName }}">
                </div>
                <div class="input-label">
                    <label for="">Date of birth:</label>
                    <input type="text" name="DateOfBirth" placeholder="Date of birth"  value="{{ $findIdMember->DateOfBirth }}">
                </div>
                <div class="input-label">
                    <label for="">Level:</label>
                    <input type="text" name="level" value="White" placeholder="Level"  value="{{ $findIdMember->level }}">
                </div>
            
                <div class="input-label">
                    <label for="">Start date:</label>
                    <input type="text" name="DateOfStart" placeholder="Start date"  value="{{ $findIdMember->DateOfStart }}">
                </div>
                <div class="input-label">
                   
                    <input type="submit" class="submitMember">
                </div>
            </form>
         </div>
    </div>
</section>