<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\program;
use App\Models\Advisor;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    

public function loginpage()

{
return view("advisor.advisorlogin");
}





    
    public function login (Request $request,program $program,Events $events)
    { 
        $event=Events::count();
        $plus=program::count();
        $program = program::get();
       
         $name = $request->input('name');
         $password = $request->input('password');
        // dd($request->input('key'));
        $viewFilePath='';
         if($name=='add' && $password=='222' || $name=='reset' && $password=='reset' ) 
        {      
       
            $viewFilePath='dummy';
         }

        else
        {       
        return view("advisor",compact('plus','event','program'));  
         }
           
           // Toastr::success('Successful', 'Admin', ["positionname" => "toast-top-right"]);
            return view($viewFilePath);
       
          
       }


    public function index(program $program,Events $events)
    {
       $event=Events::count();
        $plus=program::count();
        $program = program::get();
        return view("welcome",compact('plus','event','program'));
    }

    public function advisor(program $program,Events $events)
    {
       $event=Events::count();
        $plus=program::count();
        $program = program::get();
        return view("advisor",compact('plus','event','program'));
    }

   
    public function create()
    {
        return view("advisor.create");
    }

    
    public function store(Request $request)
    {
        $Advisor= new Advisor();
        $Advisor->uni = $request->uni;
        $Advisor->contact = $request->contact;
        $Advisor->cgpas = $request->cgpas;
        $Advisor->cgpaa = $request->cgpaa;
        $Advisor->scholar = $request->scholar;
        $Advisor->best4 = $request->best4;
        $Advisor->location =  $request->location;
        
  
        $Advisor->save();
        return redirect('/showinfo');
    }

   
    public function show(Advisor $advisor)
    {
        $Advisor = Advisor::orderBy('created_at','ASC')->get();
        return view('advisor.show',compact('Advisor'));
    }

    public function cal(Advisor $advisor)
    {
        return view("student.programs");
    }


    public function showstu(Advisor $advisor)
    {
        $Advisor = Advisor::orderBy('created_at','ASC')->get();
        return view('student.uniinfo',compact('Advisor'));
    }
   
    








    public function edit(Advisor $advisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advisor $advisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advisor $advisor)
    {
        //
    }
}
