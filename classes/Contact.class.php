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
    // public function editContact()
    // {
    //     // $posts = new Posts();

    //     // $post = $posts->editPost($_GET['id']);
    //     $id = $_POST['id'];
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $adress = $_GET['adress'];
    //     $sql = "SELECT * FROM `contact` WHERE id = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->fetch();

    //     return $result;
    // }

    public function hh($id)
    {
        $sql = "SELECT * FROM `contact` WHERE id=$id LIMIT 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    public function updateContact()
    {
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $adress = $_POST['adress'];

            // $sql = $this->connect()->prepare("UPDATE `contact` SET(`name`, `email`, `phone`,`adress`) VALUES (:fullname, :email, :phone, :adress)");

            $sql = $this->connect()->prepare("UPDATE `contact` SET name=:name, email=:email, phone=:phone, adress=:adress  WHERE id=:id");


            $sql->bindParam(':fullname', $name, PDO::PARAM_STR);
            $sql->bindParam(':email', $email, PDO::PARAM_STR);
            $sql->bindParam(':phone', $phone, PDO::PARAM_STR);
            $sql->bindParam(':adress', $adress, PDO::PARAM_STR);
            // $sql->bindParam(':id_user', $id_user, PDO::PARAM_STR);


            // $stmt = $this->connect()->prepare($sql);

            $sql->execute();
        }
    }
}
