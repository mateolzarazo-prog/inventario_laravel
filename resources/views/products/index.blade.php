<!DOCTYPE html>
<html lang="es">
<head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <meta charset="UTF-8"><title>Productos</title></head>

<body>
    <script>
        $(document).ready(function () {
            $('.data-table').DataTable({
                dom: 'Bfrtip',
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json&quot"
                },
                "pageLength": 50,
                     buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

        });
    </script>
<h1>Productos</h1>
<p><a href="{{ route('products.create') }}">Nuevo producto</a></p>
@if (session('success')) <p>{{ session('success') }}</p> @endif
<table  id="t-all" Class="data-table display nowrap" width="100%"  border="1" cellpadding="7" cellspacing="0">
  <thead><tr><th>ID</th><th>Nombre</th><th>Categoría</th>
    <th>Precio</th><th>Stock</th><th>Acciones</th></tr></thead>
  <tbody>
  @forelse ($products as $product)
    <tr>
      <td>{{ $product->product_id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->category?->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->stock }}</td>
      <td>
        <a href="{{ route('products.edit', $product) }}">Editar</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Eliminar producto?')">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
  @empty
    <tr><td colspan="6">No hay productos registrados.</td></tr>
  @endforelse
  </tbody>
</table>
</body></html>
