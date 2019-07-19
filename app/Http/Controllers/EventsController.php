<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $events = Event::orderBy('date', 'desc')->paginate(5);
        // $user = DB::table('users')->where('name', 'John')->first();

        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'venue' => 'required',
            'date' => 'required|after:today',
            'description' => 'required'
        ]);

        $event = new Event();
        $event->name = $request->input('name');
        $event->venue = $request->input('venue');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/events')->with('success', 'Event created successfully');
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
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
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
        $event = Event::find($id);

        if(auth()->user()->id !== $event->user_id) {
            return abort(404);
        }

        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'description' => 'required'
        ]);

        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->venue = $request->input('venue');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->save();

        return redirect('/events/')->with('success', 'Event updated successfully');
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
        $event = Event::find($id);

        if(auth()->user()->id !== $event->user_id) {
            return abort(404);
        } else {

        $event->delete();
        return redirect('/events/')->with('success', 'Event deleted successfully');

        }
    }
}
