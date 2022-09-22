<?php

$user = 'root';
$password = '';
$database = 'redacao_kids';
$host = 'localhost';

$mysqli = new mysqli($host,$user,$password,$database);


if($mysqli->error){
    die("Falha ao conectar com banco de dados ".$mysqli->error);
}