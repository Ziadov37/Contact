<?php
class db
{
    function __construct($servername, $password, $username, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    function connexion()
    {
        $dsn = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}