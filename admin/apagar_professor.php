<?php
 include('../config/conexao.php');
 
$id = $_GET["id"];

$conectar->query("DELETE FROM professor WHERE id_professor = '$id'");

header("location:listar_professor.php");


