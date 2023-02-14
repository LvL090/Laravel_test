<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-gray-600 flex justify-center">

    <div class="flex flex-col">
        <a href='create'>
            <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mt-2 w-full">
                Dar de alta
            </button>
        </a>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Nombre
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Apellido
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Fecha creación
                                </th>

                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Fecha modificación
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Estado (activo o no)
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Acciones
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @forelse ($users as $user)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 ">
                                        {{ $user->id }}</td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->lastname }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->created_at }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->updated_at }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        @if ($user->active)
                                            <span class="bg-green-500  font-semibold">Activo</span>
                                        @else
                                            <span class="bg-red-500 font-semibold">Inactivo</span>
                                        @endif
                                    </td>
                                    <td class="text-sm text-gray-900 font-medium px-6 py-6 whitespace-nowrap">
                                        <a href='edit'>
                                            <button
                                                class="  bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-6 border border-green-500 hover:border-transparent rounded">
                                                Editar
                                            </button>
                                        </a>
                                        <button
                                            class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                            Eliminar
                                        </button>
                                    </td>
                                @empty
                                <tr>
                                    <th>Sin usuarios</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
