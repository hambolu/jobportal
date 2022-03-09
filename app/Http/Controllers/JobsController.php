<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobapplication;
use App\Models\Exams;
use Auth;

class JobsController extends Controller
{
    //
    public function apply(Request $request)
    {
        $jobs  = new Jobapplication();
        $jobs->jobtitle = $request->input('jobtitle');
        $jobs->jobyears = $request->input('jobyears');
        $jobs->jobpay = $request->input('jobpay');
        $jobs->user_id = Auth::id();
        $jobs->save();

        return back()->with('success','Application Successful');
    }

    public function inbox()
    {
        $ck = Jobapplication::where('user_id',Auth::id())->first();
        //dd($ck->jobyears);
        $c = Jobapplication::where('user_id',Auth::id())->first();

        $job1 = '3';
        $job2 = '4';
        $job3 = '5';

        $marks = Exams::where('user_id',Auth::id())->first();
        $subtotal = $marks->q1 + $marks->q2 + $marks->q3 + $marks->q4 + $marks->q5;
        $total = $subtotal * 2;

        return view('inbox',compact('job1','job2','job3','ck','c','total'));
    }
}
