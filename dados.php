<?php
    $link = mysqli_connect("host", "login", "password", "db");
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    //echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";

    $sql = "SELECT column1 , column2, column3 FROM tabela LIMIT 400";
    $resultset = mysqli_query($link, $sql); 
    $data = array();
    while( $rows = mysqli_fetch_assoc($resultset) ) {
        $data[] = $rows;
    }
    $results = array(
    "sEcho" => 2,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "data"=>$data);
    echo json_encode($results);
?>