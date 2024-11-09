<?php
include "../config/conexao.php";
$id = $_GET['id'];

$conectar->query("DELETE FROM actividade_geral WHERE id_actividade_geral = '$id'");

header("Location:actividade_geral.php");
exit();
