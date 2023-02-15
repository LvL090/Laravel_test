<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de eliminación</title>
</head>

<body class="bg-gray-600 ">
    <div class="w-full overflow-scroll  h-screen  p-4 flex items-center justify-center">
        <div class="bg-white py-6 px-10 sm:max-w-md w-full ">
            <div class="sm:text-3xl text-2xl font-semibold text-center text-red-600  mb-12">
                Vas a eliminar el registro,estás conforme?
            </div>
            <div>
                <div class="flex justify-center my-6">
                    <a href='index'>
                        <button type="submit"
                            class=" rounded-full  p-3 w-full sm:w-56   bg-gradient-to-r from-red-600  to-red-300 text-white text-lg font-semibold ">
                            Aceptar
                        </button>
                    </a>
                </div>
                <div class="flex justify-center ">
                    <p class="text-gray-500">Haz click aquí para </p>
                    <a href='index' class="text-red-600 pl-2"> Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
