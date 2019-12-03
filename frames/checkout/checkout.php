<?php
    include '../../connection.php';

    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
        $sql = "SELECT r.id_reserva,r.id_hospede,r.dt_reserva,r.dt_checkin,r.dt_checkout,h.nome
       ,Case h.cpf 
           when null
           then 'RG'
           else 'CPF'
        end as TipoDocumento
       ,h.cpf
       ,q.numero
       ,tq.DescTipoquarto
       ,sr.DescStatusReserva
        from reservas r
        inner join hospedes h on r.id_hospede = h.id_hosp
        inner join quartos q on q.id_quarto = r.id_quarto
        inner join TipoQuarto tq on tq.idTipoQuarto = q.IDTipoQuarto
        inner join StatusReserva sr on r.status_reserva = sr.id
        where  r.id_reserva = 1
        and r.status_reserva in (3)
        ";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $res = mysqli_fetch_array($resultado);
            $json = new stdClass();
            $json->id = $res['id_reserva'];
            $json->nome = $res['nome'];
            $json->TipoDocumento = $res['TipoDocumento'];
            $json->cpf = $res['cpf'];
            $json->numero = $res['numero'];
            $json->DescTipoQuarto = $res['DescTipoquarto'];
            $json->DescStatusReserva = $res['DescStatusReserva'];
            $json->dt_reserva = $res['dt_reserva'];
            echo json_encode($json);
        }
    }

    if(isset($_POST['id']) && isset($_POST['action']) && $_POST['action'] == 'confirmar'){
        $id = $_POST['id'];
        $sql = "UPDATE reservas SET status_reserva = 4 WHERE id_reserva = $id";
        $resultado = mysqli_query($connect, $sql);
        echo 1;
    }

?>