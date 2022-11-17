<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastrar Cliente</title>

         <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--CSS do projeto -->
    <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
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
     <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>




