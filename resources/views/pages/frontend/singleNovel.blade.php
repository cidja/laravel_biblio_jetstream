@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'un seul roman')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->

    
    <div class="container flex flex-row allnovel mb-4">
    {{-- <h2>
      Affichage  du roman
    </h2>
    <div class="id">
      id : {{ $novel->id  }}
    </div> --}}
      <div class="cover w-40 mx-auto mr-5">

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
      <div class="text-container flex flex-col">    
        <div class="title flex flex-row justify-center">
          <div class="mr-4">
            Titre de l'ouvrage :
          </div>
          <div>
            {{ $novel->title }}
          </div>
        </div>

        <div class="author flex flex-row justify-center">
          <div class="mr-4">
            Auteur : 
          </div>
          <div>
            {{ $novel->author }} 
          </div>
        </div>

        <div class="isbn flex flex-row justify-center">
          <div class="mr-4">
            Isbn : 
          </div>
          <div>
            {{ $novel->isbn }} 
          </div>
        </div>

        <div class="genre flex flex-row justify-center">
          <div class="mr-4">
            Genre : 
          </div>
          <div>
            {{ $novel->genre }} 
          </div>
        </div>

        <div class="date flex flex-row justify-center">
          <div class="mr-4">
            Début : 
          </div>
            <?php  //to display date in format that I want
              $begin = $novel->begin_date;
              $end = $novel->end_date;
              if($novel->begin_date == "0000-00-00 00:00:00" || $begin == $end){
                //si la date de fin est égal à la date de début c'est juste que c'était une 
                //date par défaut donc indiqué en dessous 
                ?>
                <div>
                  non terminé ou non renseigné
                </div>
          </div> {{-- fermant de div class="date" uniquement si if rempli --}}
                <?php                
              }else{
                $beginDate = new DateTime($novel->creation_date);
                echo "<div>" . $beginDate->format("d/m/Y") . "</div>";
                ?> 
          </div>
          <div class="end-date flex flex-row justify-center">
            <div class='mr-4'>
              Fin : 
            </div>
            <div>
              <?php
                  $endDate = new DateTime($novel->end_date);
                  echo $endDate->format("d/m/Y")
              ?>
            </div>
          </div>

        <div class="date-between flex flex-row justify-center">
          <div class="mr-4">
          <?php //to see the time in days to read the book
              $interval = date_diff($beginDate, $endDate);
              echo $interval->format("Fini en %a jours");
            ?>
          </div>
        </div>
        <?php
              } 
        ?>
         
        <div class="comment flex flex-row justify-center">
          <div class="mr-4">
            Commentaire : 
          </div>
          <div>
            @if (!empty($novel->comment))
              $novel->comment
            @else
              pas de commentaire
            @endif
          </div>
        </div>
     
        <div class="container flex flex-row justify-around mt-8">
          <div class="modif-button">
            <a class="bg-green-600 p-2 rounded-md text-gray-50 hover:text-black" href="{{  route('infoUpdate', [$novel->id])  }}">
              modifier
            </a>
          </div>
          <div class="erase-button">
            <a class="bg-red-600 p-2 rounded-md text-gray-50 hover:text-black" href="{{  route('deleteview', [$novel->id])  }}">
              effacer
            </a>
          </div>
        </div>

      </div> <!--End text container!-->
        
    </div>
@endsection
