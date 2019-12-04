<?php
    include '../../connection.php';

    if(isset($_POST['cpf'])){
        $cpf = $_POST['cpf'];
        $nomeHospede = $_POST['nomeHospede'];
        $nascHospede = $_POST['nomeHospede'];
        $idadeHospede = $_POST['idadeHospede'];
        $sexoHospede = $_POST['sexoHospede'];
        $profissHospede = $_POST['profissHospede'];
        $cepHospede = $_POST['cepHospede'];
        $endHospede = $_POST['endHospede'];
        $numEndHospede = $_POST['numEndHospede'];
        $complHospede = $_POST['complHospede'];
        $bairroHospede = $_POST['bairroHospede'];
        $cidadeHospede = $_POST['cidadeHospede'];
        $ufHospede = $_POST['ufHospede'];
        $emailHospede = $_POST['emailHospede'];
        $tel1Hospede = $_POST['tel1Hospede'];
        if($_POST['tel2Hospede'] == '')
            $tel2Hospede = null;
        else
            $tel2Hospede = $_POST['tel2Hospede'];
        $sql = "INSERT INTO hospedes (`cpf`, `nome`, `dt_nasc`, `idade`, `sexo`, `profiss`, `cep`, 
                `ender`, `n_end`, `bairro`, `cidade`, `uf`, `email`, `tel1`) 
            VALUES ('$cpf', '$nomeHospede', '$nascHospede', '$idadeHospede', '$sexoHospede', '$profissHospede', 
            '$cepHospede', '$endHospede', '$numEndHospede', '$bairroHospede', '$cidadeHospede', '$ufHospede', '$emailHospede', '$tel1Hospede')";
        $resultado = mysqli_query($connect, $sql);
        echo "Cadastro realizado!";
    }

    if(isset($_POST['buscaCadastro'])){
        $cpf = $_POST['buscaCadastro'];
        $sql = "SELECT * FROM hospedes WHERE cpf='$cpf'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $res = mysqli_fetch_array($resultado);
            $json = new stdClass();
            $json->cpf = $cpf;
            $json->nome = $res['nome'];
            $json->dt_nasc = $res['dt_nasc'];
            $json ->idade = $res['idade'];
            $json->sexo = $res['sexo'];
            $json->profiss = $res['profiss'];
            $json->cep = $res['cep'];
            $json ->ender = $res['ender'];
            $json ->n_end = $res['n_end'];
            $json ->compl = $res['compl'];
            $json ->bairro = $res['bairro'];
            $json ->cidade = $res['cidade'];
            $json ->uf = $res['uf'];
            echo json_encode($json);
        }else{
            echo 0;
        }
    }
?>