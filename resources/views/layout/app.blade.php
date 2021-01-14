<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
  <head>
    <meta charset='config('app.charset')'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="css/style.css">
    <title>
      @yield('title', config('app.name'))
    </title>
  </head>
    <body class="flex flex-col h-full">
      <header>
        <nav class="p-6 bg-green-400 flex justify-between mb-6">
          <ul class="flex items-center">

            <li>
              <a href="{{ route('welcome') }}" class="p-3">Accueil</a>
            </li>

            <li>
              <a href="{{ route('statistics') }}" class="p-3">Statistiques</a>
            </li>

            <li>
              <a href="{{  route('addNovel') }}" class="p-3">Ajout</a>
            </li>

            <li>
              <a href="{{  route('list')  }}" class="p-3">Liste complète</a>
            </li>

          </ul>

          <ul class="flex items-center">

            <li>
              <a href="{{ route('account') }}" class="p-3">Mon compte</a>
            </li>

            <li>
              <a href="{{  route('home') }}" class="p-3">Deconnexion</a>
            </li>

          </ul>
          
        </nav>
      </header>
        <div class="flex-1 mx-auto">
          @yield('content')
        </div>
        <!-- to put footer sticky https://milanchheda.com/sticky-footer-using-tailwind-css !-->
        <footer class=" w-full bg-green-400  text-center pin-b ">
          <div>
            Projet réalisé par Christian GEORGES sous Laravel 8
          </div>
        </footer>
</body>
</html>
