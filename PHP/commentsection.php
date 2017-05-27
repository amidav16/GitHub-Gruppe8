<?php
    date_default_timezone_set('Europe/Oslo');
    include 'dbh.inc.php';
    include 'functions.php';
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Espen Hammer">

        <title>Campus Vulkan</title>
        <link rel="stylesheet" type="text/css" href="../CSS/campusVulkan.css">
    </head>

    <body>
        <?php $page = 'five'; include('header.php'); ?>
        
        <?php // Om du er logget inn så vises form der du kan legge til event
            if(isset($_SESSION['id']))
            { ?>
                <div class="logInContainer"> <?php
                echo "<form method='POST' action='createevent.php'>
                <div class='titleForm'>Tittel</div>
                <input type='text' name='title'><br>
                <div class='titleForm'>URL til bilde</div>
                <input type='text' name='image_path'><br>
                <div class='titleForm'>Beskrivelse</div>
                <textarea name='description'></textarea><br>
                <button type='submit' name='commentSubmit'>Legg til bidrag</button>
                </form>
                
                <form method='POST' action='logout.php'> 
                <button type='submit' name='logoutSubmit'>Logg Ut</button>"; ?>
                </div> <?php
            }
        ?>

        <?php // Om du ikke er logget inn så vises form der du kan registrere ny bruker eller logge inn på eksisterende bruker
        if(!isset($_SESSION['id']))
            { ?>
                <div class="logInContainer"> <?php
                echo "<form enctype='multipart/form-data' method='POST' action='login.php'>
                    <div class='titleForm'>Logg inn her om du allerede har en bruker</div>
                    <input type='text' name='uid' placeholder='Ditt brukernavn'><br>
                    <input type='password' name='pwd' placeholder='Ditt passord'><br>
                    <button type='submit' name='loginSubmit'>Logg Inn</button><br>
                </form>"; ?> </div> 

                <div class="logInContainer"><?php
                echo "<form method='POST' action='signup.php'>
                <div class='titleForm'>Registrer deg for å bli med i konkurransen</div>
                <input type='text' name='first' placeholder='Fornavn'><br>
                <input type='text' name='last' placeholder='Etternavn'><br>
                <input type='text' name='uid' placeholder='Nytt brukernavn'><br>
                <input type='password' name='pwd' placeholder='Nytt passord'><br>
                <button type='submit' name='signinSubmit'>Registrer</button>
                </form>"; ?>  
                </div> <?php         
            }
        ?>

        <?php require '../PHP/footer.php'; ?>   
    </body>
</html>