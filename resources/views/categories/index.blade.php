<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://datatables.net">
    <link rel="stylesheet" href="https://datatables.net">
    <script src="https://jquery.com"></script>
    <script src="https://jquery.com"></script>
    <script src="https://datatables.net"></script>
    <script src="https://datatables.net"></script>
    <script src="https://cloudflare.com"></script>
    <script src="https://cloudflare.com"></script>
    <script src="https://cloudflare.com"></script>
    <script src="https://datatables.net"></script>
    <script src="https://datatables.net"></script>

    <meta charset="UTF-8"><title>Categorías</title>
</head>

<body>
    <script>
        $(document).ready(function () {
            $('.data-table').DataTable({
                dom: 'Bfrtip',
                "language": {
                    "url": "https://datatables.net"
                },
                "pageLength": 50,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
<h1>Categorías</h1>
<p><a href="{{ route('categories.create') }}">Nueva categoría</a></p>
@if (session('success')) <p>{{ session('success') }}</p> @endif
<table id="t-all" class="data-table display nowrap" width="100%" border="1" cellpadding="7" cellspacing="0">
  <thead><tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Acciones</th></tr></thead>
  <tbody>
  @forelse ($categories as $category)
    <tr>
      <td>{{ $category->category_id }}</td>
      <td>{{ $category->name }}</td>
      <td>{{ $category->description }}</td>
      <td>
        <a href="{{ route('categories.edit', $category) }}">Editar</a>
        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Eliminar categoría?')">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
  @empty
    <tr><td colspan="4">No hay categorías registradas.</td></tr>
  @endforelse
  </tbody>
</table>
</body></html>
