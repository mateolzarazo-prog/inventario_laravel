<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Editar categoría</title></head>
<body>
<h1>Editar categoría #{{ $category->category_id }}</h1>
<p><a href="{{ route('categories.index') }}">Volver al listado</a></p>
<form action="{{ route('categories.update', $category) }}" method="POST">
  @csrf
  @method('PUT')
  <div><label for="name">Nombre:</label><br>
    <input id="name" name="name" value="{{ old('name', $category->name) }}" required>
    @error('name') <p>{{ $message }}</p> @enderror</div><br>
  <div><label for="description">Descripción:</label><br>
    <textarea id="description" name="description">{{ old('description', $category->description) }}</textarea>
    @error('description') <p>{{ $message }}</p> @enderror</div><br>
  <button type="submit">Actualizar categoría</button>
</form>
</body></html>
