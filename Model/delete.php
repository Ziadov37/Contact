<?php
include "../includes/autuload.inc.php";
include_once('./database.php');

$contact = new Contact();
$contact->deleteContact($_GET["id"]);

// header("Location: ../View/contact.php");