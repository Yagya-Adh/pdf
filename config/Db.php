<?php


namespace app\config;

use \PDO;

class Db
{
    private $server = 'db';
    private $dbname = 'users';
    private $user = 'root';
    private $pass = 'my_secret_password';

    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->dbname, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);

            // echo "Successful";

            return $conn;
        } catch (\Exception $e) {
            echo "Database Error: " . $e->getMessage();
        }
    }
}

// $d = new Db;
// $d->connect();
