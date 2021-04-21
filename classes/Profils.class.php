<?php
require_once('../Model/database.php');
class Profils extends db
{
    public function getProfil()
    {
        $sql = "SELECT * FROM `users`";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
}