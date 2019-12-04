<?php
    include '../../connection.php';

    if(isset($_POST['cpf'])){
        $cpf = $_POST['cpf'];
        $array = array();
        $sql = "SELECT id_hosp,nome from hospedes where cpf = $cpf";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $res = mysqli_fetch_array($resultado);
            $json = new stdClass();
            $json->id = $res['id_hosp'];
            $json->nome = $res['nome'];
            $json ->cpf = $cpf;

            echo json_encode($json);
        }
    }

    if(isset($_POST['id_hospede'])){
        $id_hospede = $_POST['id_hospede'];
        $checkin = isset($_POST['checkin']) ? $_POST['checkin'] : null;
        $qtdHosp = $_POST['qtdHosp'];
        $quarto = $_POST['quarto'];
        $tpQuarto = $_POST['tpQuarto'];
        $checkout = isset($_POST['checkout']) ? $_POST['checkout'] : null;

        $sql = "INSERT INTO reservas (id_hospede, dt_reserva, dt_checkin, dt_checkout, id_quarto, id_usuario, status_reserva)
        values($id_hospede,now(),$checkin,$checkout,$quarto,$id_hospede,1)";
        echo $sql;
        $resultado = mysqli_query($connect, $sql);
        echo "Reserva efetuada!";
    }

?>