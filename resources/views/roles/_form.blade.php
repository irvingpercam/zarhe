@csrf
<label for="">
    Nombre del rol <br>
        <input type="text" name="Nombre" value=" {{ old('Nombre') }}" required>
</label>
<br>
<button>{{ $btnText }}</button>