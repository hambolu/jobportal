@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Welcome back, <b>{{Auth::user()->name }}</b></p>
        </div>
    </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                <div class="tm-bg-primary-dark tm-block">
                    @if($total >= 65)
                    <h6>Congratulations</h6>
                    Test Score {{$total}}
                    <p class="text-white">Check Your Email to see date schedule for your Interview for the Positon of a {{$c->jobtitle}}</p>
                    @else
                    @if ($ck->jobyears == $job1)
                    Test Score {{$total}}
                    
                    <p class="text-white">Click the link below to start your test</p>
                    <p class="text-white"><a href="/exams">Start Test</a></p>
                @elseif ($ck->jobyears == $job2)
                
                Test Score {{$total}}
                <p class="text-white">Click the link below to start your test</p>
                <p class="text-white"><a href="/exams">Start Test</a></p>
                    
                @elseif ($ck->jobyears == $job3)
                Test Score {{$total}}
                <p class="text-white">Click the link below to start your test</p>
                <p class="text-white"><a href="/exams">Start Test</a></p>
                @else
                <p class="text-white">No Job Application Yet</p>
                @endif
                    @endif
                </div>
            </div>
        </div>
</div>
@endsection