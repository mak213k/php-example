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
        echo "teste 14/11/2018 as 15:24 0";
    }

    public function hello($what = 'World')
    {
        $sql = "INSERT INTO hello VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        echo "teste 14/11/2018 as 15:24 1";
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
