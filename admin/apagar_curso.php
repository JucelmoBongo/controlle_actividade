<?php
 include('config/conexao.php');
 
$id = $_GET["id"];

$conectar->query("DELETE FROM cursos WHERE id_curso = '$id'");

header("location:listar_curso.php");


