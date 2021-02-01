<?php

try{
    $pdo = new PDO("mysql:dbname=projeto_reservas", "victeera", "victinhow0393");
}catch (PDOException $e){
    echo "Falhou: ". $e->getMessage();
    exit;
}
