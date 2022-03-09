@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Welcome back, <b>{{Auth::user()->name }}</b></p>
        </div>
    </div>
    <div class="card">
        <div class="container">

            <form action="{{route('jobtest')}}" method="post">
                @csrf
                <div>
                    <h6>Question 1</h6>
                    <p>What type of work environment do you prefer?</p>
                    <input type="radio" name="q1" id="q1" value="10"> Productive<br>
                    <input type="radio" name="q1" id="q1" value="0"> Creative
                    
                </div>
                <div class="mt-2">
                    <h6>Question 2</h6>
                    <p>How do you deal with pressure or stressful situations?</p>
                    <input type="radio" name="q2" id="q2" value="10"> Stay calm<br>
                    <input type="radio" name="q2" id="q2" value="0"> React instantly
                    
                </div>
                <div class="mt-2">
                    <h6>Question 3</h6>
                    <p>Do you prefer working independently or on a team?</p>
                    <input type="radio" name="q3" id="q3" value="10"> Sure<br>
                    <input type="radio" name="q3" id="q3" value="0"> Depending
                    
                </div>
                <div class="mt-2">
                    <h6>Question 4</h6>
                    <p>When you’re balancing multiple projects, how do you keep yourself organized?</p>
                    <input type="radio" name="q4" id="q4" value="10"> work with deadline<br>
                    <input type="radio" name="q4" id="q4" value="0"> Prioritize my work
                    
                </div>
                <div class="mt-2">
                    <h6>Question 5</h6>
                    <p>Are you applying for other jobs?</p>
                    <input type="radio" name="q5" id="q5" value="10"> Yes<br>
                    <input type="radio" name="q5" id="q5" value="0"> No
                    
                </div>
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection