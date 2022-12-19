<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/adad.ico">
    <link rel="stylesheet" href="/assets/css/adad/login.css">
    <title>Cadastrar</title>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <img class="adad-logo" src="/assets/img/igreja/adad_logo.png">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('newuser') }}">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="name">
                            Nome
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="name" type="text" name="name" required="required" autofocus="autofocus"
                            autocomplete="name">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="email" type="email" name="email" required="required">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700">
                            DDD + Telefone
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            type="text" name="phone_number" required="required" autofocus="autofocus">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700">
                            Endereço Completo
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            type="text" name="address" required="required" autofocus="autofocus">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Senha<br>
                            Minimo: Oito Caracteres - Uma Maiscula - Um Caracter Especial
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="password" type="password" name="password" required="required"
                            autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                            Confirmar Senha
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="password_confirmation" type="password" name="password_confirmation" required="required"
                            autocomplete="new-password">
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 mx-auto hover:text-gray-900"
                            href="{{ route('login') }}">
                            Já é cadastrado?
                        </a>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
