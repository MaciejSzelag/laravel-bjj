@extends('layouts.admin.adminApp', ['title' => "Update | Plans"])
<section class="dashboard-home-wrap">
    <div class="h-s-wrap-block">
        <h1>Updates</h1>
        <div class="add-newMember">
            <p>Update adults and juniors plan</p>
        <form action="{{route('pages.admin.updatePlans', ['id' => $findIdMember->id])}}" method="post">
                @csrf 
                <div class="input-label">
                    <label for="">Plan Name:</label>
                <input type="text" name="plan_name" placeholder="planName" value="{{ $findIdMember->plan_name }}" required>
                </div>
                <div class="input-label">
                    <label for="">Description:</label>
                    <input type="text" name="description" placeholder="description" value="{{ $findIdMember->description }}" required>
                </div>
                <div class="input-label">
                    <label for="">Price:</label>
                    <input type="text" name="price" placeholder="price"  value="{{ $findIdMember->price }}" required>
                </div>
                <div class="input-label">
                    <label for="">frenquency:</label>
                    <input type="text" name="frenquency" placeholder="frenquency"  value="{{ $findIdMember->frenquency }}" required>
                </div>
            
                <div class="input-label">
                   
                    <input type="submit" class="submitMember">
                </div>
            </form>
         </div>
    </div>
</section>