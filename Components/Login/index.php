<?php
    include 'Login.php';
?>
<html>
    <head>
      <title>Inicio</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/jquery-3.4.1.min.js"></script>
        
    </head>
    <style>
    .imagem {
        background: url("assets/img/praia-de-bacutia-1.jpg") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>
    <body class="text-center imagem">
    <form class="form-signin">
        <div class="container col-md-3 jumbotron" style="margin-top:30">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT-rTSPbS90KqrJx2A82apULyTtPUE8pO6xdZSHB_u0GsH-8tH4" alt="" width="85" height="85">
        <h1 class="h3 mb-3 font-weight-normal">Faça seu login</h1>
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Digite seu e-mail" required autofocus><br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Digite sua senha" required>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Manter conectado
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        </div>
    </form>
    </body>
</html>