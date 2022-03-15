<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addevents()
    {
        return view("eventmanage.addevents");
    }

    
    public function create()
    {
        //
    }

    
    public function storeevent(Request $request)
    {
        $events= new Events();
        $events->topic = $request->topic;
        $events->venue = $request->venue;
        $events->contact = $request->contact;
        $events->tseat = $request->tseat;
        $events->reserved = $request->reserved;
        $events->date = $request->date;
        $events->time = $request->time;
       
        $events->save();
        return redirect('/eventlist');
    }

   
    public function eventlist(Events $events)
    {
        
        $events = Events::orderBy('created_at','ASC')->get();
        return view('eventmanage.eventlist',compact('events'));
    }

    
    public function edit(Events $events,$id)
    {
        $events=Events::find($id);
        return view('eventmanage.editevent',compact('events'));
    }

    
    public function update(Request $request, Events $events,$id)
    {
        $events= Events::find($id);
        $events->topic = $request->topic;
        $events->venue = $request->venue;
        $events->contact = $request->contact;
        $events->tseat = $request->tseat;
        $events->reserved = $request->reserved;
        $events->date = $request->date;
        $events->time = $request->time;
        $events->save();
        return redirect('/eventlist');
    }

   
    public function destroy(Events $events)
    {
        
    }
}
