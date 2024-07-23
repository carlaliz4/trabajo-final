<?php

include_once 'conexion.php';

$funcion = $_POST['funcion'];

if ($funcion == "registrar") {

    $codigo = $_POST['codigo'];
    $cargo = $_POST['cargo'];
    $cantidad = $_POST['cantidad'];
    $fecha_publi_convoca = $_POST['fecha_publi_convoca'];
    $fecha_recepcion = $_POST['fecha_recepcion'];
    $fecha_evaluacion = $_POST['fecha_evaluacion'];
    $fecha_publi_result = $_POST['fecha_publi_result'];
    $detalle = $_POST['detalle'];
    $ganador = $_POST['ganador'];

    $sql = "INSERT INTO convocatoria (codigo, cargo, cantidad, fecha_publi_convoca, fecha_recepcion, fecha_evaluacion, fecha_publi_result, detalle, ganador, estado) VALUES ('$codigo', '$cargo', '$cantidad', '$fecha_publi_convoca', '$fecha_recepcion', '$fecha_evaluacion', '$fecha_publi_result', '$detalle', '$ganador', '1') ";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo 'true';
    } else {
        echo "false";
    }
    
} else if ($funcion == "traer_datos") {

    $codigo = $_POST['codigo'];

    $sql = "SELECT * FROM convocatoria WHERE id = '$codigo'";

    $query = mysqli_query($con, $sql);

    mysqli_close($con);

	$result = mysqli_num_rows($query);

    if ($result > 0) {
        $data = mysqli_fetch_assoc($query);
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
		exit;
    } else {
        echo "no_data";
    }

} else if ($funcion == "update") {

    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $cargo = $_POST['cargo'];
    $cantidad = $_POST['cantidad'];
    $fecha_publi_convoca = $_POST['fecha_publi_convoca'];
    $fecha_recepcion = $_POST['fecha_recepcion'];
    $fecha_evaluacion = $_POST['fecha_evaluacion'];
    $fecha_publi_result = $_POST['fecha_publi_result'];
    $detalle = $_POST['detalle'];
    $ganador = $_POST['ganador'];

    $sql = "UPDATE convocatoria SET codigo = '$codigo', cargo = '$cargo', cantidad = '$cantidad', fecha_publi_convoca = '$fecha_publi_convoca', fecha_recepcion = '$fecha_recepcion', fecha_evaluacion = '$fecha_evaluacion', fecha_publi_result = '$fecha_publi_result', detalle = '$detalle', ganador = '$ganador' WHERE id = '$id'";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "true";
    } else {
        echo "false";
    }
} else if ($funcion == "delete") {

    $id = $_POST['id_eliminar'];

    $sql = "UPDATE convocatoria SET estado = 0 WHERE id = '$id'";

    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "true";
    } else {
        echo "false";
    }
}



?>