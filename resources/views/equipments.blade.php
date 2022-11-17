@extends('layouts.main')
@section('title', 'Equipamentos')
    
@section('content')

<div class="mx-auto mt-4 container">
  <h1 class="py-2 text-center">Equipamentos cadastrados</h1>
  <section class="row g-2">
    <article class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="/img/laravel_logo.png" class="card-img-top p-2" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card 01</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Detalhes do equipamento</a>
        </div>
      </div>
    </article>         
    <article class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="/img/laravel_logo.png" class="card-img-top p-2" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card 02</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Detalhes do equipamento</a>
        </div>
      </div>
    </article>         
    <article class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="/img/laravel_logo.png" class="card-img-top p-2" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card 03</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Detalhes do equipamento</a>
        </div>
      </div>              
  </section>
</div>
@endsection





