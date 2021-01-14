@extends('layout.app')

@section('title', "ajout d'un ouvrage")

@section('content')
<!-- source pour le formulaire : https://www.apprendre-laravel.fr/laraguide/2017-11-09-creer-un-formulaire !-->
<div class="container flex justify-around mb-4 py-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-md">
  <form class="flex justify-end flex-col" action="{{ route('addNovel') }}" method="post">
  @csrf
    <div class="input-add m-4 flex justify-between">
      <label for="title">Titre de l'ouvrage</label>
      <input type="text" name="title" id="title" autofocus>
    </div>
    <div class="input-add m-4 flex justify-between">
      <label for="author">Auteur de l'ouvrage</label>
      <input type="text" name="author" id="author">
    </div>
    <div class="input-add m-4 flex justify-between">
      <label for="isbn">ISBN</label>
      <input type="text" name="isbn" id="isbn">
    </div>
    <div class="input-add m-4 flex justify-between">
      <label for="genre">genre</label>
      <select name="genre" id="genre">
        <option>Autobiographie</option>
        <option>Biographie</option>
        <option>Classique</option>
        <option>Developpement personnel</option>
        <option>Essais</option>
        <option>Fantastique</option>
        <option>Policier</option>
        <option>Roman</option>
        <option>Science-fiction</option>
        <option>Traité</option>
        <option>Thriller</option>
        <option>Vie quotidienne</option>
      </select>
    </div>
    <div class="input-add m-4 flex justify-between">
      <label for="format">format</label>
      <select name="format" id="format">
        <option>Poche</option>
        <option>Broché</option>
        <option>Kindle</option>
      </select>
    </div>
    <div class="input-add m-4 flex justify-between">
      <label for="pageCount">nombre de pages</label>
      <input type="number" min="1" name="pageCount" id="pageCount">
    </div>
    <div class="input-add m-4 flex justify-between">
      <label for="cover">Couverture</label>
      <input type="text" name="cover" id="cover">
    </div>
    <input type="submit" name="add-submit" value="valider">
  </form>
</div>

@endsection
