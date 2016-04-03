@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($events as $event)
    	<p>Event located at {{ $event->location }} at {{ $event->time }} with id {{ $event->user_id }}</p>
    @endforeach
        <div class="col s10 offset-s1">
            <h4 style="margin-top: 20px"><a href="add"><i class="small material-icons" style="margin-right: 10px">alarm_on</i>Add New Alarm</a></h4>
        </div>
    </div>
</div>
@endsection
