<?php   
    $hostname = '127.0.0.1';
    $login = 'root';
    $senha = '';
    $con = mysqli_connect($hostname,$login,$senha);
    $database = 'manutencaopreventiva';
    mysqli_select_db($con ,$database);

?>