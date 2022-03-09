<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // $validatedData = $request->validate([
        //     'file' => 'required|pdf|max:2048',
        //    ]);

        $id = Auth::user()->id;
    
           $profile_picture = "";
        if ($request->hasfile('profile_picture')) {
            $file            = $request->file('profile_picture');
            $profile_picture = time() . $file->getClientOriginalName();
            $file->move(public_path() . "/uploads/profile/", $profile_picture);
        }

        $my_cv = "";
        if ($request->hasfile('my_cv')) {
            $file            = $request->file('my_cv');
            $my_cv = time() . $file->getClientOriginalName();
            $file->move(public_path() . "/uploads/cvs/", $my_cv);
        }

        $joblist               = User::find($id);
        $joblist->name         = $request->input('name');
        $joblist->email        = $request->input('email');
        $joblist->phone        = $request->input('phone');
        $joblist->my_cv        = $my_cv;
        $joblist->profile_photo_path = $profile_picture;
        $joblist->skills       = $request->input('skills');
        $joblist->linkedin_url = $request->input('linkedin_url');
        $joblist->languages     = $request->input('language');
        $joblist->exp     = $request->input('years_of_exp');
        //dd($joblist);
        $joblist->save();
    
           return back()->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
