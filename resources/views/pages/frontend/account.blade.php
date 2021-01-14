@extends('layout.app')

@section('title', 'nom du roman')

@section('content')
  <div class="flex flex-col items-center">
    <h3 class="text-4xl">Mon compte</h3>
    <div class="avatar">
      <img src="https://place-hold.it/150" alt="une image de ton avatar">
    </div>
    <div class="id">
      <span>Pseudo :</span>
      <span>mon pseudo</span>
    </div>
    
    <div class="change-pwd">

      <form class="change-pwd" action="" method="post">

        <div class="border-4 border-indigo-500 p-1 mb-5">
          <input type="password" name="old-pwd" id="old-pwd" placeholder="tapez votre ancien mot de passe"/>
        </div>

         <div class="border-4 border-indigo-500 p-1 mb-5">
          <input type="password" name="new-pwd1" id="new-pwd1" placeholder="tapez votre nouveau mot de passe"/>
        </div>

         <div class="border-4 border-indigo-500 p-1">
          <input type="password" name="new-pwd2" id="new-pwd2" placeholder="retapez votre nouveau mot de passe"/>
        </div>

        <div class="submitbutton flex justify-center">
          <input class="mt-5 py-2 px-20 text-xl border-2 border-blue-500 rounded-xl  bg-blue-500 hover:bg-blue-800" type="submit" name="add-submit" value="valider">
        </div>
      </form>
    </div>
  </div>



@endsection
