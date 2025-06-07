<?php 

require 'Classes/Aluno.class.php';

$retorno = $aluno = new Aluno();

if(!$retorno){
    echo "<h1> Banco indiponível, tente mais tarde </h1>";
}else{
    $aluno->setRa("123");
    $aluno->setNome("Fabio");
    $aluno->setCurso("DS");
    $aluno->setPerido("matutino");

    $nome = $aluno->getNome();
    $ra = $aluno->getRa();
    $curso = $aluno->getCurso();
    $periodo = $aluno->getPerido();

    echo  "<h1> Aluno : $nome - RA: $ra - Curso: $curso - Período: - $periodo </h1>";
}
?>