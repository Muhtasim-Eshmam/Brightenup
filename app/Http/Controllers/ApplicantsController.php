<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\program;
use App\Models\applicants;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

    public function applypro(program $program,Events $events)
    {
        $events=Events::get();
        $program=program::get();
        $name=program::get();
        $topic=Events::get();
        return view("applicants.apply",compact('program','name','events'));
    }

    
    
    public function store(Request $request)
    {
        $apply= new applicants();
        $apply->for = $request->for;
        $apply->select = $request->select;
        $apply->select2 = $request->select2;
        $apply->seat = $request->seat;
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->contact = $request->contact;
       
        $apply->save();
        return redirect('/myapply');
    }

    
    public function show(applicants $applicants)
    {   
            $apply = applicants::orderBy('created_at','ASC')->get();
            return view('applicants.myapply',compact('apply'));
        
    
    }


    public function adminview(applicants $applicants)
    {   
            $apply = applicants::orderBy('created_at','ASC')->get();
            return view('applicants.adminview',compact('apply'));
        
    
    }

    
    public function edit(applicants $applicants)
    {
        //
    }

    
    public function update(Request $request, applicants $applicants)
    {
        //
    }

  
    public function destroy(applicants $applicants,$id)
    {
        $apply=applicants::find($id);
        $apply->delete();
        return back();
    }
}
