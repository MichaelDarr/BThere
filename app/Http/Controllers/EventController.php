<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Event;
use Auth;

class EventController extends Controller
{
    public function store()
    {
    	$event = new Event;
    	$user = Auth::user();
    	$input = Input::all();
        $event->user_id = $user->id;
        $event->location = $input["location"];
        $event->time = $input["time"];
        $event->sunday = array_key_exists("sunday", $input);
        $event->monday = array_key_exists("monday", $input);
        $event->tuesday = array_key_exists("tuesday", $input);
        $event->wednesday = array_key_exists("wednesday", $input);
        $event->thursday = array_key_exists("thursday", $input);
        $event->friday = array_key_exists("friday", $input);
        $event->saturday =array_key_exists("saturday", $input);

        $event->save();

        return redirect('schedule')
    }
}
