<?php
require_once 'connection.php';
$pdo = new PDO('mysql:host=localhost;dbname=mvc_videos','root','123456');

$sql = 'INSERT INTO videos (URL_VIDEO, TITULO_VIDEO) values (?, ?)';

$statement = $pdo -> prepare($sql);
$statement -> bindValue(1,$_POST['url']);
$statement -> bindValue(2,$_POST['titulo']);
$statement -> execute();

header('location:index.php');
// var_dump($statement -> execute()); confirmar conexão com o banco e sql