@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/campeon/'.$campeon->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('campeon.form',['modo'=>'Editar'])


</form>
</div>
@endsection