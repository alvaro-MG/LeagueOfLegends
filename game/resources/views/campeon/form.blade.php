
<h1>{{ $modo }} Campeon</h1>
<br>

<div class="form-group " >

<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($campeon->Nombre)?$campeon->Nombre:old('Nombre') }}" id="Nombre">
<br>

<label for="Region"> Region </label>
<input type="text" name="Region" value="{{ isset($campeon->Region)?$campeon->Region:old('Region') }}" id="Region">
<br>

<label for="Raza"> Raza </label>
<input type="text" name="Raza" value="{{ isset($campeon->Raza)?$campeon->Raza:old('Raza') }}" id="Raza">
<br>

<label for="Edad"> Edad </label>
<input type="text" name="Edad" value="{{ isset($campeon->Edad)?$campeon->Edad:old('Edad') }}" id="Edad">
<br>

<label for="Sexo"> Sexo </label>
<input type="text" name="Sexo" value="{{ isset($campeon->Sexo)?$campeon->Sexo:old('Sexo') }}" id="Sexo">
<br>

<label for="Habilidad"> Habilidad </label>
<input type="text" name="Habilidad" value="{{ isset($campeon->Habilidad)?$campeon->Habilidad:old('Habilidad') }}" id="Habilidad">
<br>

<label for="Foto"> Foto </label>
@if(isset($campeon->Foto))
<img src="{{ asset('storage').'/'.$campeon->Foto }}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>

<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('campeon') }}"> Regresar. </a>
<br>