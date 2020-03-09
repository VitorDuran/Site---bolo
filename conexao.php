<?php 

$host = 'localhost';
$banco = 'cadastro';
$user = 'root';
$password = '';

try{
$conexao = new PDO("mysql:host=$host", $user,$password);
$query = "CREATE DATABASE IF NOT EXISTS $banco";
$conexao->exec($query);

}catch(PDOException $e){
    echo $query . "Erro na conexão"; 
}

try{  
    $conexao = new PDO("mysql:host=$host;dbname=$banco", $user, $password);
    $query = "CREATE TABLE IF NOT EXISTS $banco.usuarios (
        `id`        int     (12)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `nome`      varchar (40)  NOT NULL,
        `email`     varchar (50)  NOT NULL UNIQUE,
        `cidade`    varchar (50)  NOT NULL,
        `cep`       int     (9)   NOT NULL,
        `cel`       int     (14)  NOT NULL,
        `tel`       int     (12)

    )ENGINE=InnoDB DEFAULT CHARSET=latin1";
$conexao->exec($query);
}catch(PDOException $e){
    echo $query . "Falha Tabela";   
}

?>