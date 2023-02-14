<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>Panel de Control</h1>
    <h2>Listado de personas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>FECHA CREACIÓN</th>
                <th>FECHA MODIFICADO</th>
                <th>ESTADO (ACTIVO O NO)</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->lastname }}</th>
                    <th>{{ $user->created_at }}</th>
                    <th>{{ $user->updated_at }}</th>
                    <th>
                        @if ($user->active)
                            <span style="color:green">Activo</span>
                        @else
                            <span style="color:red">Inactivo</span>
                        @endif
                    </th>
                </tr>

            @empty
                <tr>
                    <th>Sin usuarios</th>
                </tr>
            @endforelse
        </tbody>

    </table>
</body>

</html>
