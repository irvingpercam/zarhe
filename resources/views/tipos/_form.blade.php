@csrf
<label for="">
    Nombre del tipo <br>
    <input type="text" name="Nombre" value="{{ old('Nombre', $tipo->Nombre) }}" required>
</label>
<br>
<label for="">
    Siglas <br>
    <input type="text" name="Siglas" value="{{ old('Siglas', $tipo->Siglas) }}" required>
</label>
<br>
<button>{{ $btnText }}</button>