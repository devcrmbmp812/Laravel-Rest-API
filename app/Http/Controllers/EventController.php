<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Asset;

class EventController extends Controller
{
	/*
		@param null
		@response JSON Data of Events
	*/
    public function getEvents()
    {
    	// Get all data from events table;
    	$events = Event::all();
    	return json_encode($events);
    }

    public function getEvent($eventid)
    {
    	// Get assets by given eventid
    	$assets = Asset::where('event_id', '=', $eventid)->get();
        return $assets;
    	//return json_encode($assets);
    }
}
