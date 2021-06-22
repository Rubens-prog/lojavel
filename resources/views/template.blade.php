<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <title>Lojavel</title>
</head>

<body>
<form id="Logout" method="POST" action="{{ route('logout') }}">
    @csrf
</form>

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
          <li class="nav-item active pl-5">
            <a class="nav-link" href="/usuarios">Usuários</a>
          </li>    
        </ul>
      </div>
    </div>

    <div>
      <ul class="navbar-nav">
          <li class="nav-item active pl-5">
            <a class="nav-link" href="/sobre">Sobre</a>
          </li>
          
          <li class="nav-item active pl-5">
              <a class="nav-link " aria-current="page" href="/register">registrar-se</a>
          </li> 
          <li class="nav-item active pl-5">
              <a class=" nav-link" onclick="logout()" aria-current="page" href="#">
                    Sair
            </a>
          </li> 
      </ul>
    </div>
</nav>
 

<div style="min-height: 600px;" class="container">
            @yield('main')
        </div>

<footer style="min-height:100px" class="blog-footer text-center bg-dark text-light p-5">

    <a class="text-light" href="#" >Back to top</a>

</footer> 

<script type="text/javascript">
    function logout(){
        document.getElementById('Logout').submit();
    }
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>