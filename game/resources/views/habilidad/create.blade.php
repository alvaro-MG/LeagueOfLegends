Formulario de creacion de Habilidades.


<form action="{{ url('/habilidad') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('habilidad.form');


</form>