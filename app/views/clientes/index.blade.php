<h1>Clientes</h1>

@if($clientes)
	<ul>
		@foreach($clientes as $cliente)
		<li>{{ $cliente->real_name }} -- {{$cliente->email }}-{{ HTML::link('clientes/delete/'.$cliente->id, 'Borrar')}}
			- {{ HTML::link('clientes/update/'.$cliente->id, 'Actualizar un Usuario')}}
		</li>
		 @endforeach
	</ul>
@else
	todavia no hay ninguún cliente registrado
@endif

{{ HTML::link('clientes/create', 'Crear un Cliente')}}
