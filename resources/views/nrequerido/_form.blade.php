@csrf
<label for="">
    Nombre del nivel <br>
    <input type="text" name="Nombre" value="{{ old('Nombre', $nrequerido->Nombre) }}" required>
</label>
<br>
<button>{{ $btnText }}</button>