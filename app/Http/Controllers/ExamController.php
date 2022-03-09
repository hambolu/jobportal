<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exams;
use Auth;

class ExamController extends Controller
{
    //
    public function jobtest(Request $request)
    {
        $exam  = new Exams();
        $exam->q1 = $request->input('q1');
        $exam->q2 = $request->input('q2');
        $exam->q3 = $request->input('q3');
        $exam->q4 = $request->input('q4');
        $exam->q5 = $request->input('q5');
        $exam->user_id = Auth::id();
        $exam->save();

        return back()->with('success', 'Check your for the Next Step...');
    }
}
