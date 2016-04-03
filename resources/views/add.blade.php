@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<form role="form" method="POST" action="{{ url('/event') }}">
	        <div class="col s10 offset-s1">
	        	<h4>Location:</h4>
	        	<input type="text" id="location" name ="location" placeholder="location" />
	        	<div id="location-picker" style="width: 100%; height: 500px;"></div>
	        	<h4 style="margin-top: 50px">Time:</h4>
	        	<input id="time" name="time"></input>
	        	<h4 style="margin-top: 50px">Days:</h4>
	        	<p class="weekday-picker">
					<input type="checkbox" id="sunday" name="sunday"/>
					<label for="sunday">Sunday</label>
				</p>
				<p class="weekday-picker">
					<input type="checkbox" id="monday" name="monday"/>
					<label for="monday">Monday</label>
				</p>
				<p class="weekday-picker">
					<input type="checkbox" id="tuesday" name="tuesday"/>
					<label for="tuesday">Tuesday</label>
				</p>
				<p class="weekday-picker">
					<input type="checkbox" id="wednesday" name="wednesday"/>
					<label for="wednesday">Wednesday</label>
				</p>
				<p class="weekday-picker">
					<input type="checkbox" id="thursday" name="thursday"/>
					<label for="thursday">Thursday</label>
				</p>
				<p class="weekday-picker">
					<input type="checkbox" id="friday" name="friday"/>
					<label for="friday">Friday</label>
				</p>
				<p class="weekday-picker">
					<input type="checkbox" id="saturday" name="saturday"/>
					<label for="saturday">Saturday</label>
				</p>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<br />
				<button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
	        </div>
	    </form>
    </div>
</div>

<script>
$('#location-picker').locationpicker({
	radius: 0,
	location: {latitude: 37.27080664709021, longitude: -76.70911051310645},
	inputBinding: {
		locationNameInput: $('#location'),
	}
});
</script>

@endsection
