<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        label{
            display: block;
        }
    </style>
    <title>Cadastro de alunos</title>
</head>
<body>
    <h1>Cadastro de alunos </h1>
    <form action="" method="post">
        <label for="ra">RA do aluno</label>
        <input type="text" name="ra">
        <label for="nome">Nome</label>
        <input type="text" name= "nome">
        <label for="curso">Curso</label>
        <input type="text" name="curso">
        <label for="periodo">Periodo</label>
        <input type="text" name="periodo">

        <input type="submit" value="Cadastrar">

    </form>
    
</body>
</html>

<?php

 require 'Classes/Aluno.class.php';

$ra      = $_POST['ra'];
$nome    = $_POST['nome'];
$curso   = $_POST['curso'];
$periodo = $_POST['periodo'];

$con = $aluno = new Aluno();

if (!$con){
    exit;
 }else{
    $isOk = $aluno->cadastrarAluno($ra, $nome, $curso, $periodo);
 } 


