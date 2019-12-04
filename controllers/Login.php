<?php
    $id = $_POST['id'];
    $senha = $_POST['senha'];

    $connect = mysqli_connect('br796.hostgator.com.br', 'progr740_aps', 'Unip2019');
    $db = mysqli_select_db($connect, 'progr740_hotel');
    $resultado = mysqli_query($connect, "SELECT nome FROM usuarios WHERE id_usuario='$id' AND senha='$senha'");
    if(mysqli_num_rows($resultado) > 0){
        $res = mysqli_fetch_array($resultado);
        session_start();
        $_SESSION['nome'] = $res['nome'];
        echo 1;
    }else{
        echo "Login/senha inválido";
    }
?>