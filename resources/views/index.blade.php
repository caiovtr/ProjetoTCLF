<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: black;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">CAMPEONATOS</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #003e80;">
        <div class="my-3 py-3">
          <h2 class="display-5">Copa do Brasil</h2>
        </div>
        <button type="button" class="btn btn-primary" >Acessar</button>
      </div>
      <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white"style="background-color: green;">
        <div class="my-3 p-3">
          <h2 class="display-5">Brasileirão</h2>
        </div>
        <button type="button" class="btn btn-success">Acessar</button>
      </div>
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #d8a200;">
        <div class="my-3 py-3">
          <h2 class="display-5">Campeonato Mineiro</h2>
        </div>
        <button type="button" class="btn btn-warning text-white">Acessar</button>
      </div>
  </div>
</body>
</html>