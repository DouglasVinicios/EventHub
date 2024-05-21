<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events.app', ['events' => Event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id = null)
    {
        $event = !is_null($id) ? Event::findOrFail($id) : new Event();
        return view('events.form', ['event' => $event]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request, string $id = null)
    {
        $validated = $request->validated();

        $event = !is_null($id) ? Event::findOrFail($id) : new Event();
        $event->title = $request->title;
        $event->subtitle = $request->subtitle;
        $event->description = $request->description;
        $event->save();

        return new EventResource($event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::deleted($id);
    }
}
