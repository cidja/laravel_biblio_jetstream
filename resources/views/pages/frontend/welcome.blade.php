@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'Welcome')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->
  <section>
    <form class="" action=" {{ route('search') }} " method="post">
      @csrf
      <input class="border-2 border-solid border-indigo-500 rounded-md py-1 px-2" type="text" name="search" placeholder="rentrez votre recherche"/>
      <input class="bg-indigo-400 py-2 px-8 rounded-full" type="submit" name="submitSearch" value="valider" />
    </form>
  </section>

  <section>
    <h2 class="text-center my-5 text-lg">Affichage des 10 derniers romans</h2>
    <div class="container mx-auto">
      @foreach($novels as $novel)
        <div class="container allnovel mb-4 py-5 bg-gradient-to-r from-green-400 to-blue-500 rounded-md">

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

          <div class="text-container my-4 px-5">
            <div class="title flex flex-row justify-center">
              <div class="mr-4">Titre de l'ouvrage :</div>
              <div>{{ $novel->title }}</div>
            </div>
            <div class="author flex flex-row justify-center">
              <div class="mr-4">Auteur : </div>
              <div>{{ $novel->author }} </div>
            </div>
          </div>
          
          <div class="more flex flex-row justify-center">
            <div class="ok-icon mr-2">
              @if($novel->finish == "1")
                <img class="ok-pin" src="/images/ok.png">
              @else
                <img class="nok-pin" src="/images/nok.png">
              @endif
            </div>
            
            <div class="more-button">
              <a class="bg-green-600 p-2 rounded-md text-gray-50 hover:text-black" href="{{  route('singleNovel', [$novel->id])  }}">
                en savoir plus
              </a>
            </div>

            <div class="ok-icon mr-2">
              @if($novel->finish == "1")
                <img class="ok-pin" src="/images/ok.png">
              @endif
            </div>
          </div>
          

        </div>
@endforeach
    </div>
    {{ $novels ->links() }}

  </section>


@endsection
