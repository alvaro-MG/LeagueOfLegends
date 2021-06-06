@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/campeon') }}" method="post" enctype="multipart/form-data" >
@csrf

@include('campeon.form',['modo'=>'Crear']);


</form>
</div>
@endsection