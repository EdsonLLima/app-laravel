@extends('layouts.main')
@section('title', 'Cadastrar Cliente')
    
@section('content')
<div class="mx-auto mt-4" style="width:500px">
  <h1>Cadastrar dados do cliente</h1>
  <form class="row g-3">
      <div class="col-md-6">
          <label for="name" class="form-label">Digite seu nome</label>
          <input type="text" class="form-control" id="name" placeholder=" digite seu nome">
      </div>
      <div class="col-md-6">
          <label for="email" class="form-label">Digite seu e-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
      </div>

      <div class="col-12">
          <button href="#" class="btn btn-primary">Cadastrar</button>
      </div>
  </form>
</div>
@endsection