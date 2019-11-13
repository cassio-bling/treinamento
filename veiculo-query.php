<?php

include 'database.php';

function listarVeiculos()
{    
    $pdo = Database::connect();
    $sql = 'SELECT * FROM veiculo ORDER BY id DESC';
    $data = $pdo->query($sql);
    Database::disconnect();
    return $data;
}

function pegarVeiculo($id)
{
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM veiculo WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
    return $data;
} 

function inserirVeiculo()
{


}

?>