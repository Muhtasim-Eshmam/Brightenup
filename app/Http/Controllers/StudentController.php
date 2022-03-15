<?php

namespace App\Http\Controllers;


use App\Models\Events;
use App\Models\program;
use App\Models\Advisor;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index(program $program,Events $events)
    {
        $events=Events::get();
       $event=Events::count();
        $plus=program::count();
        $program = program::get();
        $eventlist=Events::get();
        return view("home",compact('plus','event','program','eventlist','events'));
    }
 
       

    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
        
    }

    public function show(Student $student)
    {
        //
    }

    
    public function edit(Student $student)
    {
        //
    }

    
    public function update(Request $request, Student $student)
    {
        //
    }

    
    public function destroy(Student $student)
    {
        //
    }
}
