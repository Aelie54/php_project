<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, , maximum-scale=1">
     <!--<meta name="description" content="Mon site e-commerce de vente de chaussure">
    <meta name="keywords" content="chaussure, e-commerce, vente, chausette">-->
    <meta name="author" content="Amélie">
    <!-- <link rel="stylesheet" href="./style.css"> -->

    <title>
        Bienvenue - Accueil
    </title>
</head>

<header>

    <!-- Navbarre -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="test.php">Site de recettes</a>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>

 <body>

<h1>Bienvenue sur mon site</h1>

<form action="submit_contact.php" method="GET">
    <div>
        <label for="email" required="required">Email</label> <br>
        <input type="email" name="email"> <br><br>
    </div>
    <div>
        <label for="message" >Votre message</label> <br>
        <textarea placeholder="Exprimez vous" name="message" required="required"></textarea> <br><br>
    </div>
    
    <button type="submit">Envoyer</button>
</form>

<!-- en cas d'absence de renseignement d'un des champs -->

<?php

?>

</body>

<!-- http://localhost/test.php -->