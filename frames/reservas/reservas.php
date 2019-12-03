<?php
    include '../../connection.php';

    if(isset($_POST['cpf'])){
        $cpf = $_POST['cpf'];
        $array = array();
        $sql = "SELECT id_hosp,nome,cpf from hospedes where cpf like '%$cpf%'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $res = mysqli_fetch_array($resultado);
            while ($row = mysqli_fetch_assoc($res)) {
                $array1['id'] = $row['nome'];
                $array1['col1'] = $row['cpf'];
            
                array_push($array,$array1);
            }
            echo json_encode($res);
        }
    }

?>