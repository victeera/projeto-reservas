<?php
include 'config.php';
include 'classes/Carros.php';
include 'classes/Reservas.php';

$reservas = new Reservas($pdo);
?>
<h1>Reservas</h1>
    <label><a href="reservas.php">[Adicionar reservas]</a></label><br><br>

<?php

$lista = $reservas->getReservas();

foreach($lista as $item){
    $data1 = date('d/m/Y', strtotime($item['data_inicio']));
    $data2 = date('d/m/Y', strtotime($item['data_fim']));
    echo $item['pessoa']. ' reservou o carro ' . $item['nome']. ' entre ' .$data1. ' e ' . $data2 .'<br>';
}
