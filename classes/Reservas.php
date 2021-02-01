<?php


class Reservas
{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function getReservas(){
        $array = array();

        $sql = "SELECT c.id, c.nome, r.id, r.pessoa, r.data_inicio, r.data_fim 
                FROM carros c
                INNER JOIN reservas r 
                ON c.id = r.id_carro";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

}