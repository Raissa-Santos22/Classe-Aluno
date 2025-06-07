<?php 
class Aluno {
    private $id;
    private $ra;
    private $nome;
    private $curso;
    private $periodo;
    private $pdo;

    // getter e setter - modificadores de acesso

    // o metodo get retorna o valor que estiver dentro do atributo

    public function getRa() {
        return $this->ra;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getCurso() {
        return $this->curso;
    }
    public function getPerido() {
        return $this->periodo;
    }

    // O Método set vai gravar um valor no atributo, então eu tenho que passar esse parametro dentro dos parenteses

    public function setRa($ra){
        $this->ra = $ra;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCurso($curso){
        $this->curso= $curso;
    }

    public function setPerido($periodo){
        $this->periodo = $periodo;
    }

    public function __construct(){
        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $user = "root";
        $pass = "";

        try {
         $this->pdo = new PDO($dns,$user,$pass);
         return true;
        } catch (\Throwable $th) {
            return false;
        }    
    }
    public function cadastrarAluno($ra, $nome, $curso, $periodo){
        $cmd = "INSERT INTO aluno SET nome = $nome, ra = $ra, curso = $curso, periodo = $periodo";
        $cmd = "INSERT INTO aluno SET nome = :n, ra = :r, curso = :c, periodo = :p";

        $cmd = $this->pdo->prepare($cmd);
        $cmd->bindValue( ":n", $nome );
        $cmd->bindValue( ":r", $ra );
        $cmd->bindValue( ":c", $curso );
        $cmd->bindValue( ":p", $periodo );

       return $cmd->execute();
    }



        
      
}      
      
?>