@if(Auth::check())
	Te has identificado correctamente como {{ Auth::user()->real_name }}
	@endif