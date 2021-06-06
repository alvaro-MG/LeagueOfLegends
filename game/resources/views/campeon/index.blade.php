Mostrar la lista de campeones.


@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('campeon/create') }}"class="btn btn-warning"> Registrar nuevo Campeon. </a>
<br>
<br>
<table  class="table table-light table-bordered" >

    <thead class="thead-night">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Region</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Habilidad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $campeones as $campeon )
        <tr>
            <td>{{ $campeon->id }}</td>

            <td>
            <img class= "img-fluid rounded" src="{{ asset('storage').'/'.$campeon->Foto }}" width="100" alt="">
            </td>

            <td>{{ $campeon->Nombre }}</td>
            <td>{{ $campeon->Region }}</td>
            <td>{{ $campeon->Raza }}</td>
            <td>{{ $campeon->Edad }}</td>
            <td>{{ $campeon->Sexo }}</td>
            <td>{{ $campeon->Habilidad }}</td>
            <td> 

            <a href="{{ url('/campeon/'.$campeon->id.'/edit') }}">
                    Editar
            </a>

             | 
            
                <form action="{{ url('/campeon/'.$campeon->id) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-warning" type="submit"  onclick="return confirm('¿Quieres borrar?')"
                value="Borrar">
                </form>
        
             </td>
        </tr>
        @endforeach
    </tbody>
</table>