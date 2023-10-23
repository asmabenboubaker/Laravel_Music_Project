@extends('Home')

@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Détails de l'événement</div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('images/' . $event->image) }}" alt="Image de l'événement" width="200" height="200">
      </div>
      <div class="col-md-8">
        <h5 class="card-title">Nom : {{ $event->nom }}</h5>
        <p class="card-text"><strong>Description :</strong> {{ $event->description }}</p>
        <p class="card-text"><strong>Date :</strong> {{ $event->date }}</p>
        <p class="card-text"><strong>Lieu :</strong> {{ $event->lieu }}</p>
        <p class="card-text"><strong>Artiste :</strong> {{ $event->artiste }}</p>
        <p class="card-text"><strong>Catégorie :</strong> {{ $event->categorie }}</p>
      </div>
    </div>
  </div>
</div>
@endsection