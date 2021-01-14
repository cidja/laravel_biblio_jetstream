<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset='config('app.charset')'>
    <title>Register</title>
  </head>
  <body>
    <h1>Bienvenue au nouvel utilisateur</h1>
    <form class="" action="index.html" method="post">
      <div class="user_name">
        <input type="text" name="id" id="id" placeholder="nom d'utilisateur"/>
      </div>
      <div>
        <input type="password" name="pwd1" id="pwd1" placeholder="tapez votre mot de passe" />
      </div>
      <div>
        <input type="password" name="pwd2" id="pwd2" placeholder="taper de nouveau votre mot de passe" />
      </div>
      <div class="submit">
        <input type="submit" name="submit" value="valider">
      </div>

    </form>
  </body>
</html>
