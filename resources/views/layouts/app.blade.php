<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Devstagram @yield('titulo')</title>
  @vite('resources/css/app.css')

  <!-- Styles -->

</head>

<body class="flex flex-col bg-gray-100 min-h-screen">
    <header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-black">
         DevStagram
      </h1>
      <nav class="flex gap-2 items-center"    >
        <a href="/login" class="font-bold uppercase text-gray-600 text-sm mr-2">Login</a>
        <a href="/register" class="font-bold uppercase text-gray-600 text-sm">Registro</a>

      </nav>
    </div>
  </header> 
   
  <main class="container mx-auto mt-10"   >
      <h2 class="font-black text-center text-3xl mb-10"> 
        @yield('titulo')
      </h2>
        @yield('contenido')
  </main>

  <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-auto">
       {{now()-> year}} DevSagram - Todos los derechos reservados 
  </footer>
</body>

</html>  