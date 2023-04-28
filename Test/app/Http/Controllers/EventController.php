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
        return view('Events.detaile',compact('event'));
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
    public function closestEvents()
    {
        $date = date('d-m-y');
        $events = Event::whereRaw('date_event > CURDATE()')->orderBy('date_event', 'asc')->take(5)->get();
        return view('startMainPage', compact('events'));
    }
    public function search(Request $request)
    {
        $AAAAAAAAAAAA = $request->input('search');
        
        $events = Event::where('title', 'LIKE', "%".$AAAAAAAAAAAA."%")
        ->orWhere('description', 'LIKE', "%".$AAAAAAAAAAAA."%")
        ->orWhere('date_event', 'LIKE', "%".$AAAAAAAAAAAA."%")
        ->orderBy('date_event', 'asc')
        ->get();
        return view('search', compact('events'));
    }
}
