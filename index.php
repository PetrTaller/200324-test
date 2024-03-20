<?php
session_start();

if(isset($_SESSION["username"])) {
$logged = true;
}
if(!isset($_SESSION["username"])) {
$logged = false;
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
                        <form action="<?php if($logged) {echo "tamed-animal-list.php";}else{ echo "login.php";}?>" method="post" class="nav-item">
        <button style="border:none;" class="nav-item"><?php 
        if($logged) {echo "Enter the List of tamed animals";}else{ echo "Login to access this feature";}?></button>
        </form>
                        </li>
                        <a class="text-secondary nav-item">-----</a>
                        </li>
                        <form action="<?php if($logged) {echo "wanted-animal-list.php";}else{ echo "login.php";}?>" method="post" class="nav-item">
        <button style="border:none;"class="nav-item"><?php 
        if($logged) {echo "Enter the List of animals we want to aquire";}else{ echo "Login to access this feature";}?></button>
        </form>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav2">
                <ul class="navbar-nav">
                <li class="nav-item">
                            <a class="nav-link" href="<?php if($logged) {echo "logout.php";}else{ echo "login.php";}?>" style="color:white"><?php if($logged) {echo "Sign out";}else{ echo "Sign in";}?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php if($logged) {echo "";}else{ echo "registration.php";}?>" style="color:white"><?php if($logged) {echo "";}else{ echo "Register";}?></a>
                        </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
</div>    
        </div>
        <br>
        <h1>Welcome to the site of animal lovers <?php 
        if($logged) {echo "".$_SESSION["username"];}else{ echo "Guest";}?>!</h1>
        <a><h2>WELCOME TO OUR VIBRANT ONLINE COMMUNITY, where passion for animals knows no bounds! Our site is a sanctuary for animal lovers from all walks of life, united by our unwavering love and admiration for the creatures that share our world.

Here, you'll find a treasure trove of resources, from heartwarming stories and adorable pictures to insightful articles and expert advice on pet care, wildlife conservation, and everything in between. Whether you're a proud pet parent, an advocate for animal rights, or simply someone who finds solace in the presence of furry, feathered, or scaly companions, you've found your digital haven.

Our community isn't just about admiring animals from afar; it's about actively engaging with them and making a difference in their lives. From fostering homeless pets to volunteering at local shelters, our members are dedicated to making the world a better place for all creatures great and small.

But our site isn't just about serious matters; it's also a place to celebrate the joy and wonder that animals bring into our lives. Share your funny anecdotes, upload your cutest pet videos, and join in lively discussions about everything from the latest animal memes to the quirkiest animal behaviors.

Whether you're here to learn, to connect with fellow animal enthusiasts, or simply to revel in the beauty of the animal kingdom, we're thrilled to have you join us. So pull up a virtual chair, unleash your inner animal lover, and let's embark on this wild and wonderful journey together!
</h2>
<h2>
Welcome to our online oasis, where the bond between humans and animals is celebrated in all its forms! Here, amidst the digital expanse, we've created a sanctuary for those who find solace, inspiration, and joy in the company of our furry, feathered, and finned friends.

Our virtual haven is a melting pot of diverse perspectives, united by a shared reverence for the beauty, intelligence, and resilience of the animal kingdom. Whether you're an advocate for wildlife conservation, a devoted pet parent, or simply someone who finds comfort in the gentle presence of animals, you've found your tribe.

Step into our digital realm and you'll discover a tapestry of stories, each thread woven with love, compassion, and empathy for our animal counterparts. From tales of heartwarming rescue missions to awe-inspiring encounters with creatures great and small, our community is a testament to the profound impact animals have on our lives.

</h2></a>
        </div>
        <div>
        <footer>Petr Taller 2024 ©</footer>
    <script>
    </script>
    </body>
    </html>