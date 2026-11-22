<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Nueva categoría</title></head>
<body>
<h1>Registrar categoría</h1>
<p><a href="{{ route('categories.index') }}">Volver al listado</a></p>
<form action="{{ route('categories.store') }}" method="POST">
  @csrf
  <div><label for="name">Nombre:</label><br>
    <input id="name" name="name" value="{{ old('name') }}" required>
    @error('name') <p>{{ $message }}</p> @enderror</div><br>
  <div><label for="description">Descripción:</label><br>
    <textarea id="description" name="description">{{ old('description') }}</textarea>
    @error('description') <p>{{ $message }}</p> @enderror</div><br>
  <button type="submit">Guardar categoría</button>
</form>
</body></html>
