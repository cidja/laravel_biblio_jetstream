<DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home | {{config('app.name')}}</title>
  </head>
  <body>
    <ul>
      <li>
        <a href="adminer-4.7.8.php">Adminer</a>
      </li>
      <li>
        <a href="{{route('register')}}">Register</a>
      </li>
      <li>
        <a href="{{route('login')}}">Login</a>
      </li>
      <li>
        <a href="{{route('welcome')}}">Welcome</a>
      </li>
    </ul>


    <h1>Bienvenue sur le site il était une fois</h1>
    <p>Endroit parfait pour organiser sa bibliothèque de livre</p>
    <p>
      Un livre se termine <span class="text-color purple-400">mais ne s'oublie jamais</span>
    </p>
  </body>
</html>
