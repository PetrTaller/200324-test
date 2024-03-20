<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    echo "<script>alert('$message');</script>";
    unset($_SESSION["message"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <title>Animal lovers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
body {
    text-align:center;
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
        color: rgb(0, 0, 0);
    }
h1 {
    color: #0f0f0f;
    font-size: 60px;
    text-align: center;
    font-weight: normal;
    text-transform: uppercase;
    font-family: lekton, monospace;
    -ms-flex-item-align: center;
}
h2 {
    color: #0f0f0f;
    font-size: 20px;
    text-align: center;
    font-weight: normal;
    text-transform: uppercase;
    font-family: lekton, monospace;
    -ms-flex-item-align: center;
    margin: 100px;
}
h3 {
    color: #0f0f0f;
    font-size: 30px;
    text-align: center;
    font-weight: normal;
    text-transform: uppercase;
    font-family: lekton, monospace;
    -ms-flex-item-align: center;
    margin: 100px;
}
footer {
    color: #838383;
    font-size: 15px;
    text-align: center;
    font-family: lekton, monospace;
}
button {
    text-align: center;
    font-family: lekton, monospace;
    border:15px;
}
    </style>
    </head>
    <body>

        <div>
        <div class="p-3 mb-2 bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href=""><em>Animal lovers</em></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <form action="tamed-animal-list.php" method="post" class="nav-item">
        <button style="border:none;" class="nav-item  text-muted" >Enter the List of tamed animals</button>
        </form>
                        </li>
                        <a class="text-secondary nav-item">-----</a>
                        </li>
                        <form action="index.php" method="post" class="nav-item">
        <button style="border:none;"class="nav-item">
        Back</button>
        </form>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav2">
                <ul class="navbar-nav">
                <li class="nav-item">
                            <a class="nav-link" href="logout.php" style="color:white">Sign out</a>
                        </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
</div>    
        </div>
        <br>

<div class="container-sm bg-white text-center">
        <div class="row row-cols-1 row-cols-md-4 g-4 p-3">

        <div class="card" >
            <img src="1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Affenpincher</h5>
              <p class="card-text">Loyal curius</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item "><a class="btn btn-primary" href="#" role="button">More Details</a></li>
            </ul>
          </div>

          <div class="card" >
            <img src="2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Afghan Hound</h5>
              <p class="card-text">Eye catching</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item "><a class="btn btn-primary" href="#" role="button">More Details</a></li>
            </ul>
          </div>

          <div class="card">
            <img src="3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Airedale Terrier</h5>
              <p class="card-text">Big strenght and size</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item "><a class="btn btn-primary" href="#" role="button">More Details</a></li>
            </ul>
          </div>

        <div class="card">
            <img src="4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Akita</h5>
              <p class="card-text">Muscular, affectionite</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item "><a class="btn btn-primary" href="#" role="button">More Details</a></li>
            </ul>
          </div>
        </div>

        <div>
        <footer>Petr Taller 2024 ©</footer>
    <script>
    </script>
    </body>
    </html>