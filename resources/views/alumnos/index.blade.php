<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">edad</th>
        </tr>
    </thead>

    <thead>
        @foreach($alumnos as $alumno)
        <tr>
            <td scope="col">{{ $loop->iteration }}</td>
            <td scope="col">{{ $alumno->nombre}}</td>
            <td scope="col">{{ $alumno->apellido}}</td>
            <td scope="col">{{ $alumno->edad}}</td>
        </tr>
        @endforeach
    </thead>
</table>
