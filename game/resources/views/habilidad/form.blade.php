<br>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($habilidad->Nombre)?$habilidad->Nombre:old('Nombre') }}" id="Nombre">
<br>

<label for="Personaje"> Personaje </label>
<input type="text" name="Personaje" value="{{ isset($habilidad->Personaje)?$habilidad->Personaje:old('Personaje') }}" id="Personaje">
<br>

<label for="Tecla"> Tecla </label>
<input type="text" name="Tecla" value="{{ isset($habilidad->Tecla)?$habilidad->Tecla:old('Tecla') }}" id="Tecla">
<br>

<label for="CosteDeManaN1"> Coste de Mana N1 </label>
<input type="text" name="CosteDeManaN1" value="{{ isset($habilidad->CosteDeManaN1)?$habilidad->CosteDeManaN1:old('CosteDeManaN1') }}" id="CosteDeManaN1">
<br>

<label for="CosteDeManaN2"> Coste de Mana N2 </label>
<input type="text" name="CosteDeManaN2" value="{{ isset($habilidad->CosteDeManaN2)?$habilidad->CosteDeManaN2:old('CosteDeManaN2') }}" id="CosteDeManaN2">
<br>

<label for="CosteDeManaN3"> Coste de Mana N3 </label>
<input type="text" name="CosteDeManaN3" value="{{ isset($habilidad->CosteDeManaN3)?$habilidad->CosteDeManaN3:old('CosteDeManaN3') }}" id="CosteDeManaN3">
<br>

<label for="CooldownN1"> Cooldown N1 </label>
<input type="text" name="CooldownN1" value="{{ isset($habilidad->CooldownN1)?$habilidad->CooldownN1:old('CooldownN1') }}" id="CooldownN1">
<br>

<label for="CooldownN2"> Cooldown N2 </label>
<input type="text" name="CooldownN2" value="{{ isset($habilidad->CooldownN2)?$habilidad->CooldownN2:old('CooldownN2') }}" id="CooldownN2">
<br>

<label for="CooldownN3"> Cooldown N3 </label>
<input type="text" name="CooldownN3" value="{{ isset($habilidad->CooldownN3)?$habilidad->CooldownN3:old('CooldownN3') }}" id="CooldownN3">
<br>

<label for="Foto"> Foto </label>
@if(isset($habilidad->Foto))
<img src="{{ asset('storage').'/'.$habilidad->Foto }}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>

<input type="submit" value="Guardar datos">
<br>