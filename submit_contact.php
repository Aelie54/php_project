<?php
    if (
        //isset pour défini, !empty pour pas vide et filter pour format adresse email
        (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
        || (!isset($_GET['message']) && !empty($_GET['message']))
        )
    {
	echo('Il faut un email valide et un message pour soumettre le formulaire.');

    return;

    } 
    else {

        ?>

        <h1>Message bien reçu !</h1>
                
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
            </div>
        </div>
    
    
    <?php
     
    }


?>

