Mostrar la lista de habilidades.
<table  class="table table-light table-bordered" >

    <thead class="thead-night">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Personaje</th>
            <th>Tecla</th>
            <th>CosteDeManaN1</th>
            <th>CosteDeManaN2</th>
            <th>CosteDeManaN3</th>
            <th>CooldwnN1</th>
            <th>CooldwnN2</th>
            <th>CooldwnN3</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $habilidades as $habilidad )
        <tr>
            <td>{{ $habilidad->id }}</td>
            <td>
            <img class= "img-fluid rounded" src="{{ asset('storage').'/'.$habilidad->Foto }}" width="100" alt="">
            </td>
            <td>{{ $habilidad->Nombre }}</td>
            <td>{{ $habilidad->Personaje }}</td>
            <td>{{ $habilidad->Tecla }}</td>
            <td>{{ $habilidad->CosteDeManaN1 }}</td>
            <td>{{ $habilidad->CosteDeManaN2 }}</td>
            <td>{{ $habilidad->CosteDeManaN3 }}</td>
            <td>{{ $habilidad->CooldwnN1 }}</td>
            <td>{{ $habilidad->CooldwnN2 }}</td>
            <td>{{ $habilidad->CooldwnN3 }}</td>
            <td> 
            
            <a href="{{ url('/habilidad/'.$habilidad->id.'/edit') }}">
                    Editar
            </a>
            
             | 

                <form action="{{ url('/habilidad/'.$habilidad->id ) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Desea eliminarlo?')" value="Borrar">
                
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>