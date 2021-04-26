<?php
include "../includes/autuload.inc.php";

//  instant object  //
$contact = new Contact();
$contact->addContact();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
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
                    <a class="nav-link" href="">ADD CONTACT</a>
                    <a class="nav-link" href="">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adress</label>
            <input type="ntext" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adress">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</body>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>


</html>