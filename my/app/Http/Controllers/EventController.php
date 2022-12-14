<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        //$data = $request->all();
        //EventController::create($data);

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->desc;

        $event->save();

        return redirect('/');


    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }


}
