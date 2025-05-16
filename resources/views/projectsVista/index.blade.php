@foreach($proyectos as $proyecto)
    <tr>
        <th scope="row">{{ $proyecto->id }}</th>
        <td>{{ $proyecto->titulo }}</td>
        <td>{{ $proyecto->descripcion }}</td>
        <td>{{ $proyecto->created_at }}</td>
        <td>{{ $proyecto->updated_at }}</td>
    </tr>
    @endforeach
