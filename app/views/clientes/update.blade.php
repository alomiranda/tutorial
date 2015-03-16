<h1>Actualizar un usuario</h1>

{{ Form::open() }}

	Real Name: {{ Form::text('real_name', $cliente->real_name)}} <br>
	Email: {{ Form::text('email', $cliente->email) }} <br>
	Change Password: {{ Form::password('password')}} <br>

{{ Form::submit('Actualizar Usuario')}}

{{ Form::close() }}