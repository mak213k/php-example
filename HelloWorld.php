<?php

class HelloWorld
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function show()
    {
        echo "Funcionando";
    }
    
    public function hello($what = 'World')
    {
        $this->show();
        $sql = "INSERT INTO hello VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        return "Hello $what";
        
    }


    public function what()
    {
        $sql = "SELECT what FROM hello";
        $stmt = $this->pdo->query($sql);
        $result = $stmt->fetchColumn();
        echo "teste 14/11/2018 as 15:24 2";
        return $result;
    }
}
