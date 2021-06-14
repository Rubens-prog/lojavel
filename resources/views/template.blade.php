<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojavel</title>
</head>
<body>

<style>

  h1{

    padding-top:50px;
    text-align:center;
  }

  nav{

    min-height:100px;
    
  }

</style>
    
<nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
  <div class="container">
    <a href="/"><img src="/img/logo.png" width="200"></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     
      <li class="nav-item active pl-5">
        <a class="nav-link" href="/produtos">Lista de Produtos</a>
      </li>
      <li class="nav-item active pl-5">
        <a class="nav-link" href="/categorias">Categoria de Produtos</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<div style="min-height: 600px;" class="container">
            @yield('main')       
        </div>

<footer style="min-height:100px" class="blog-footer text-center bg-dark text-light p-2">


</footer> 

</body>
</html>