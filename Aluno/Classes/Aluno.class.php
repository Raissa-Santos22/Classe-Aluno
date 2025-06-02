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
        /* a classe PDO foi criada para auxiliar a interação com o DB
        ela precisa de tres atributos */

        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $user = "root";
        $pass = "";

        try {
        $this->pdo = new PDO($dns,$user,$pass);
        } catch (\Throwable $th) {
            return false;
        }
        
    }
}
?>