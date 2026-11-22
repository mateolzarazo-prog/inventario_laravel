<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Nuevo producto</title></head>
<body>
<h1>Registrar producto</h1>
<p><a href="{{ route('products.index') }}">Volver al listado</a></p>
<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <div><label for="name">Nombre:</label><br>
    <input id="name" name="name" value="{{ old('name') }}" required>
    @error('name') <p>{{ $message }}</p> @enderror</div><br>
  <div><label for="category_id">Categoría:</label><br>
    <select id="category_id" name="category_id" required>
      <option value="">Seleccione...</option>
      @foreach ($categories as $category)
        <option value="{{ $category->category_id }}" @selected(old('category_id') == $category->category_id)>{{ $category->name }}</option>
      @endforeach
    </select>
    @error('category_id') <p>{{ $message }}</p> @enderror</div><br>
  <div><label for="description">Descripción:</label><br>
    <textarea id="description" name="description">{{ old('description') }}</textarea>
    @error('description') <p>{{ $message }}</p> @enderror</div><br>
  <div><label for="price">Precio:</label><br>
    <input type="number" id="price" name="price" min="0" step="0.01" value="{{ old('price') }}" required>
    @error('price') <p>{{ $message }}</p> @enderror</div><br>
  <div><label for="stock">Stock:</label><br>
    <input type="number" id="stock" name="stock" min="0" step="1" value="{{ old('stock') }}" required>
    @error('stock') <p>{{ $message }}</p> @enderror</div><br>
  <button type="submit">Guardar producto</button>
</form>
</body></html>
