<?php
include_once('../Model/database.php');
class Contact extends db
{
    public function getContact()
    {
        $sql = "SELECT * FROM `contact`";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function addContact()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $id_user = "1";
            $adress = $_POST['adress'];
            $sql = $this->connect()->prepare("INSERT INTO contact (`fullname`, `email`, `phone`,`adress`,`id_user`) VALUES (:fullname, :email, :phone,:adress,:id_user)");
            $sql->bindParam(':fullname', $name, PDO::PARAM_STR);
            $sql->bindParam(':email', $email, PDO::PARAM_STR);
            $sql->bindParam(':phone', $phone, PDO::PARAM_STR);
            $sql->bindParam(':adress', $adress, PDO::PARAM_STR);
            $sql->bindParam(':id_user', $id_user, PDO::PARAM_STR);
            $sql->execute();
            header('location:../View/contact.php');
        }
    }
}