<?php

include('database.php');

if (isset($_POST['name'])) {
    
    //data send
    $nombre = $_POST['name'];
    $tipo_doc = $_POST['tipo_documento'];
    $num_doc = $_POST['num'];
    $mov = $_POST['motivo_llamada'];
    $ns = $_POST['nivel'];
    $sol_pro = $_POST['num_llamadas'];
    $recomendar = $_POST['recomendacion'];
    $comentario = $_POST['comentarios'];

    //query
    $query = "INSERT into encuestas (full_name,tipo_documento,num_documento,motivo,nivel_satisfacion,sol_problemas,recomendar,comentario) VALUES ('$nombre', '$tipo_doc', '$num_doc', '$mov', '$ns','$sol_pro','$recomendar','$comentario')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo die('Query Failed ') . $conn -> connect_error;
    }
}

//responses
echo 'Encuesta enviada sastifatoriamente';

?>
