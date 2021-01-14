@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'effacer un roman')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->
<div class="container allnovel mb-4">
  <div class='flex justify-around'>
    <h2>
      Suppression du roman : 
    </h2>
    <div>
      {{ $novel->title }}
    </div>
    </div>
    <form class="flex text-center flex-col" action=" {{ route('deleteConfirm', [$novel->id]) }}" method="post">
     @csrf
    <div>
      <label for="password">Rentrer le nom du roman comme inscrit au dessus pour confirmer la suppression : </label>
    </div>
    <div>
      <input class='border-2 border-solid border-red-300 my-4' type="password" name="password" id="password" autofocus>
    </div>
      <input type='hidden' name="id" value= '{{ $novel->id  }}'>
      <input type='hidden' name='title' value= '{{ $novel->title  }}'>
    <div>
      <input class="bg-red-400 rounded-md px-16 py-2 text-white hover:text-gray-600" type="submit" value="valider">
    </div>
    </form>

      </div>

@endsection