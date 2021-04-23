<?php
include "../includes/autuload.inc.php";
$contact = new Contact();
$data = $contact->getContact();
// var_dump($data)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Contact List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex  justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="profil.php">PROFIL</a>
                    <a class="nav-link" href="hi.php">ADD CONTACT</a>
                    <a class="nav-link" href="">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="">
        <h3 class="text-center text-uppercase ">Contact</h3>
    </div>
    <div>
        <?php foreach ($contact->getContact() as $contact) : ?>
        <table class="table t-20">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Full name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Edit / Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $contact['fullname'] ?></th>
                    <td><?= $contact['email'] ?></td>
                    <td><?= $contact['phone'] ?></td>
                    <td><?= $contact['adress'] ?></td>
                    <td>
                        <button type="button" class="btn btn-dark">Edite</button>
                        <button type="button" class="btn btn-dark">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
        <?php endforeach; ?>
    </div>
</body>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

</html>