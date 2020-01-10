<?php

namespace Model\database;

class DBConnect
{
    protected $dsn;
    protected $userName;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=127.0.0.1;dbname=manager';
        $this->userName = 'root';
        $this->password = "";
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new \PDO($this->dsn , $this->userName , $this->password);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
        return $conn;
    }
}