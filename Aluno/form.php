<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    
    <style>
        label{
            display: block;
        }
    </style>
    <title>Cadastro de alunos</title>
</head>
<body>
    <div id="cadastro">
        <h1>Cadastro de alunos </h1>
        <form action="" method="post">
            <label for="ra">RA do aluno</label>
            <input type="number" name="ra" id="ra">
            <label for="nome">Nome</label>
            <input type="text" name= "nome" id="nome">
            <label for="curso">Curso</label>
            <input type="text" name="curso" id="curso">
            <label for="periodo">Periodo</label>
            <input type="text" name="periodo" id="periodo">
            <input type="submit" value="Cadastrar" id="botao">
    </div>

    </form>  
</body>
</html>

<?php

require 'Classes/Aluno.class.php';

        $ra  = $_POST['ra'];
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        $periodo = $_POST['periodo'];

    $con = $aluno = new Aluno();

    if (!$con){
     exit;
     }else{
    $isOk = $aluno->cadastrarAluno($ra, $nome, $curso, $periodo);
 } 







