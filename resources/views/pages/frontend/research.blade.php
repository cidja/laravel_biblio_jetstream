@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'effacer un roman')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->
<h1>Voici le résultat de votre recherche</h1>
<div class="container allnovel mb-4">
    <h2>
      Affichage  du roman
    </h2>
    <div class="id">
      id : {{ $novel->id  }}
    </div>
      <div class="cover w-40 mx-auto">

          @php //to display a php 
          $cover = null; // to initiate the $cover
            if(!empty($novel->cover)){
              $cover = $novel->cover;
            }else{
              $cover = "/images/oups.png";
            }
          @endphp
         
            <img src="{{ $cover }}" alt="couverture du livre">
          </div>
      <div class="title flex flex-row justify-center">
        <div class="mr-4">Titre de l'ouvrage :</div>
        <div>{{ $novel->title }}</div>
      </div>
      <div class="author flex flex-row justify-center">
        <div class="mr-4">Auteur : </div>
        <div>{{ $novel->author }} </div>
      </div>
      <div class="isbn flex flex-row justify-center">
        <div class="mr-4">Isbn : </div>
        <div>{{ $novel->isbn }} </div>
      </div>
      <div class="genre flex flex-row justify-center">
        <div class="mr-4">Genre : </div>
        <div>{{ $novel->genre }} </div>
      </div>
      <div class="creation_date flex flex-row justify-center">
        <div class="mr-4">Ajouté le : </div>
        <div>
          @php //to display date in format that I want
            $begindate = new DateTime($novel->creation_date);
            echo $begindate->format("d/m/Y à H:m");
          @endphp  
        </div>
      </div>
      <div class="comment flex flex-row justify-center">
        <div class="mr-4">Commentaire : </div>
        <div>
        <?php
          if(!empty($novel->comment)){
            echo $novel->comment;
          }else{
            echo "pas de commentaire";
          } ?> 
        </div>
      </div>

        <div class="container flex flex-row justify-around">
          <div class="">
            <a class="bg-green-600 p-2 rounded-md text-gray-50 hover:text-black" href="{{  route('singleNovel', [$novel->id])  }}">
              modifier
            </a>
          </div>
          <div class="">
            <a class="bg-red-600 p-2 rounded-md text-gray-50 hover:text-black" href="{{  route('deleteview', [$novel->id])  }}">
              effacer
            </a>
          </div>
        </div>
      </div>


@endsection