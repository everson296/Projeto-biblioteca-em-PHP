<?php

function conexaoMysql(){
    $server = 'localhost';
    $user = 'root';
    $password = 'bcd127';
    $database = 'DBbiblioteca';
    
    $conexao = mysqli_connect($server, $user, $password, $database);
    return $conexao;
    
}

?>