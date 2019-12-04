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
        $checkin = $_POST['checkin'];
        $qtdHosp = $_POST['qtdHosp'];
        $quarto = $_POST['quarto'];
        $tpQuarto = $_POST['tpQuarto'];
        $checkout = $_POST['checkout'];
        $id_usuario = 1000;

        $sql = "INSERT INTO reservas (id_hospede, dt_reserva, dt_checkin, dt_checkout, id_quarto, id_usuario, status_reserva)
        values($id_hospede,now(),null,null,$quarto,$id_usuario,1)";

        $sql2 = "UPDATE `progr740_hotel`.`quartos` SET `status_quarto` = 'Ocupado' WHERE (`id_quarto` = '$quarto')";
        $resultado = mysqli_query($connect, $sql);
        $resultado2 = mysqli_query($connect, $sql2);
        echo "Reserva confirmada!";
    }

    if(isset($_POST['consultaQuarto'])){
        $tipo = $_POST['tipoQuarto'];
        $sql = "select id_quarto from quartos WHERE status_quarto = 'Disponivel' AND IDTipoQuarto = $tipo LIMIT 1";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $res = mysqli_fetch_array($resultado);
            echo $res['id_quarto'];
        }else{
            echo 0;
        }
    }

    if(isset($_POST['buscaReserva'])){
        $reserva = $_POST['buscaReserva'];
        $sql = "SELECT r.id_reserva,r.id_hospede,r.dt_reserva,r.dt_checkin,r.dt_checkout,h.nome
                ,Case h.cpf when null then 'RG' else 'CPF' end as TipoDocumento
                ,h.cpf
                ,q.numero
                ,tq.DescTipoquarto
                ,sr.DescStatusReserva
        from reservas r
        inner join hospedes h on r.id_hospede = h.id_hosp
        inner join quartos q on q.id_quarto = r.id_quarto
        inner join TipoQuarto tq on tq.idTipoQuarto = q.IDTipoQuarto
        inner join StatusReserva sr on r.status_reserva = sr.id
        where r.id_reserva = $reserva
        ";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $res = mysqli_fetch_array($resultado);
            $json = new stdClass();
            $json->id_reserva = $res['id_reserva'];
            $json->nome = $res['nome'];
            $json->dt_checkin = $res['dt_checkin'];
            $json ->dt_checkout = $res['dt_checkout'];
            $json->cpf = $res['cpf'];
            $json->DescTipoquarto = $res['DescTipoquarto'];
            $json ->numero = $res['numero'];
            echo json_encode($json);
        }else{
            echo 0;
        }
    }

    if(isset($_POST['idCancela'])){
        $id_reserva = $_POST['idCancela'];
        $sql = "UPDATE reservas set status_reserva = 2 WHERE id_reserva = $id_reserva";
        $resultado = mysqli_query($connect, $sql);
        echo "Reserva Cancelada!";
    }
?>