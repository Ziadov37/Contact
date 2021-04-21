<?php

class Profils extends db
{
    public function getPost()
    {
        $sql = "SELECT * FROM `users`";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }
}