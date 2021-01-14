@extends('layout.app')
<!--On hérite du template layout.app !-->
@section('title',"modification de $novel->title")
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->
<div class="container flex justify-around mb-4 py-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-md px-10">
    <form class="flex justify-end flex-col" action="{{ route('confirmUpdate') }}" method="post">
    @csrf
      <input type='hidden' value= '{{ $novel->id  }}' name='id'>
      <div class="title mb-3">
        <div class="input-add  flex justify-between">
          <label for="title">Titre de l'ouvrage</label>
        </div>
  
        <div class="flex flex-col">
          <input class="border-2 rounded-lg pl-2"type="text" name="title" id="title" autofocus value="{{  $novel->title  }}">
        </div>
      </div>

      <div class="author mb-3">
        <div class="input-add  flex justify-between">
          <label for="author">Auteur de l'ouvrage</label>
          </div>
        <div class="flex flex-col">
          <input class="border-2 rounded-lg pl-2" type="text" name="author" id="author" value="{{  $novel->author  }}">
        </div>
      </div>

      <div class="isbn mb-3">
        <div class="input-add  flex justify-between">
          <label for="isbn">ISBN</label>
        </div>
        <div class="flex flex-col">
          <input class="border-2 rounded-lg pl-2" type="text" name="isbn" id="isbn" value="{{ $novel->isbn  }}">
        </div>
      </div>

      <div class="genre mb-3">
        <div class="input-add  flex justify-between">
            <?php // pour selectionner l'option qui est déjà dans la base de données link: https://stackoverflow.com/questions/3518002/how-can-i-set-the-default-value-for-an-html-select-element
              $selected = $novel->genre;
            ?>
          <label for="genre">genre</label>
        </div>
        <div class="flex flex-col">
          <select class="pr-20" name="genre" id="genre">
            <option <?php if($selected == "Autobiographie"){echo('selected');}?>>Autobiographie</option>
            <option <?php if($selected == "Biographie"){echo('selected');}?>>Biographie</option>
            <option <?php if($selected == "Classique"){echo('selected');}?>>Classique</option>
            <option <?php if($selected == "Developpement personnel"){echo('selected');}?>>Developpement personnel</option>
            <option <?php if($selected == "Essais"){echo('selected');}?>>Essais</option>
            <option <?php if($selected == "Fantastique"){echo('selected');}?>>Fantastique</option>
            <option <?php if($selected == "Policier"){echo('selected');}?>>Policier</option>
            <option <?php if($selected == "Roman"){echo('selected');}?>>Roman</option>
            <option <?php if($selected == "Science-fiction"){echo('selected');}?>>Science-fiction</option>
            <option <?php if($selected == "Traité"){echo('selected');}?>>Traité</option>
            <option <?php if($selected == "Thriller"){echo('selected');}?>>Thriller</option>
            <option <?php if($selected == "Vie quotidienne"){echo('selected');}?>>Vie quotidienne</option>
          </select>
        </div>
      </div>

      <div class="format mb-3">
        <div class="input-add  flex justify-between">
            <?php 
              $format = $novel->format;
              ?>
          <label for="format">format</label>
        </div>
        <div class="flex flex-col">
          <select class="pr-20" name="format" id="format">
            <option <?php if($format == "Poche"){echo('selected');}?>>Poche</option>
            <option <?php if($format == "Broché"){echo('selected');}?>>Broché</option>
            <option <?php if($format == "Kindle"){echo('selected');}?>>Kindle</option>
          </select>
        </div>
      </div>

      <div class="pagescount mb-3">
        <div class="input-add  flex justify-between">
          <label for="pageCount">nombre de pages</label>
        </div>
        <div class="flex flex-col">
          <input class="border-2 rounded-lg pl-2" type="number" min="1" name="pageCount" id="pageCount" value="{{ $novel->page_count  }}">
        </div>
      </div>

      <div class="flex flex-row justify-around">
        <div class="flex flex-row items-center ">
          <div class="cover mb-3">
            <div class="input-add mb-5">
              <label for="cover">Couverture</label>
            </div>
            <div class="">
              <input class="border-2 rounded-lg pl-2" type="text" name="cover" id="cover" value="{{ $novel->cover  }}">
            </div>
          </div>
        </div>

        <div class="cover w-1/5">
            <img src="{{  $novel->cover  }}" alt="couverture du livre">
        </div>
      </div>

      <div class="submitbutton flex justify-center">
        <input class="mt-5 py-2 px-20 text-xl border-2 border-blue-500 rounded-xl  bg-blue-500 hover:bg-blue-800" type="submit" name="add-submit" value="valider">
      </div>
    </form>
  </div>

@endsection