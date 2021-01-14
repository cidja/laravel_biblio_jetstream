@extends('layout.app')

@section('title', 'statistiques')

@section('content')

  <section>
    <div class="">
      <span>total livres :</span>
      <span>{{ $bookTotal }}</span>
    </div>
    <div class="">
      <span>total pages :</span>
      <span>{{  $pagesTotal  }} pages</span>
    </div>
    <div class="">
      <span>Nombre de pages en moyenne :</span>
      <span>{{  intval($avgPages)  }}</span>
    </div>
  </section>

@endsection
