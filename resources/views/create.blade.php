<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación</title>
</head>

<body class="bg-gray-600 ">
    <form action="{{ route('storeUser') }}" method="POST">
        @csrf
        <div class="w-full overflow-scroll  h-screen  p-4 flex items-center justify-center">
            <div class="bg-white py-6 px-10 sm:max-w-md w-full ">
                <div class="sm:text-3xl text-2xl font-semibold text-center text-sky-600  mb-12">
                    Registro de alta nueva
                </div>
                <div>
                    <div>
                        <input type="text" name="name"
                            class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500"
                            placeholder="Nombre " />
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="lastname"
                            class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 my-8"
                            placeholder="Apellidos " />
                        @error('lastname')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="flex justify-center my-6">
                        <button type="submit"
                            class=" rounded-full  p-3 w-full sm:w-56   bg-gradient-to-r from-sky-600  to-teal-300 text-white text-lg font-semibold ">
                            Enviar
                        </button>
                    </div>
                    <div class="flex justify-center ">
                        <p class="text-gray-500">Haz click aquí para </p>
                        <a href='{{ route('index') }}' class="text-red-600 pl-2"> Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
