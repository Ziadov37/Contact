<?php
// include "./includes/autuload.inc.php";
include_once "./Model/database.php";
require "./classes/Profils.class.php";


$profil = new Profils();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];

    $profil->addContact($name, $email, $phone, $adress);

    // header("location:./View/contact.php");
    header("location: {$_SERVER['HTTP_ORIGIN']}/php/Contact/View/contact.php?status=added");
}