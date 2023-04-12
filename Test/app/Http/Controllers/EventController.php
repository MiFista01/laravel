<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('date_event', 'desc')->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date_event' => 'required',
            'adress' => 'required'
        ]);

        $data = $request->all();
        $filename = $request->file('image')->getClientOriginalName();
        $data['image'] = $filename;
        Event::create($data);
        $file = $request->file('image');
        if ($filename) {
            $file->move('../public/images/', $filename);
        }
        return redirect('/eventlist');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date_event' => 'required',
            'adress' => 'required'
        ]);

        $data = $request->all();
        if ($request->file('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $data['image'] = $filename;
            $file = $request->file('image');
            if ($filename) {
                $file->move('../public/images/', $filename);
            }
        }
        $event->update($data);
        return redirect('/eventlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/eventlist');
    }
}
