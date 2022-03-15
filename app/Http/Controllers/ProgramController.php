<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addpragram()
    {
        return view("programs.addprogram");
    }


    public function addprog(Request $request)
    {
        $program= new program();
        $program->name = $request->name;
        $program->ins = $request->ins;
        $program->fee = $request->fee;
        $program->duration = $request->duration;
        $program->location = $request->location;
        $program->contact = $request-> contact;
        $program->start = $request->start;
        $program->tseat = $request->tseat;
        $program->rseat = $request-> rseat;
        $program->status = $request->status;
       
        $program->save();
        return redirect('/programlist');
    }



    public function programlist(program $program)
    {
        $program = program::orderBy('created_at','ASC')->get();
        return view('programs.programlist',compact('program'));
    }


    public function edit(program $program,$id)
    {
        $program=program::find($id);
        return view('programs.updateprograms',compact('program'));
    }

    public function update(Request $request, program $program,$id)
    {
        
            $program= program::find($id);
            $program->name = $request->name;
            $program->ins = $request->ins;
            $program->fee = $request->fee;
            $program->duration = $request->duration;
            $program->location = $request->location;
            $program->contact = $request-> contact;
            $program->start = $request->start;
            $program->tseat = $request->tseat;
            $program->rseat = $request-> rseat;
            $program->status = $request->status;
           
            $program->save();
            return redirect('/programlist');
    }

   


 






    public function destroy(program $program)
    {
        //
    }
}
