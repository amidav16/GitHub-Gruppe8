<?php
    date_default_timezone_set('Europe/Oslo');
    include '../PHP/dbh.inc.php';
    include '../PHP/comments.inc.php';
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
    
    <?php
        if(isset($_SESSION['id']))
        { ?>
            <div class="logInContainer"> <?php
            echo "<form method='POST' action='".setComments($db)."'>
            <div class='titleForm'>Tittel</div>
            <input type='text' name='title'><br>
            <div class='titleForm'>URL til bilde</div>
            <input type='text' name='image_path'><br>
            <div class='titleForm'>Beskrivelse</div>
            <textarea name='description'></textarea><br>
            <button type='submit' name='commentSubmit'>Comment</button>
            </form>
            <form method='POST' action='".userLogout()."'> 
                
                <button type='submit' name='logoutSubmit'>Log out</button>"; ?>
            </div> <?php
        }
        else
        { ?>
            <div class="logInContainer"> <?php
            echo "<form method='POST' action='".getLogin($db)."'>
                <div class='titleForm'>Logg inn her om du allerede har en bruker</div>
                <input type='text' name='uid' placeholder='Ditt brukernavn'><br>
                <input type='password' name='pwd' placeholder='Ditt passord'><br>
                <button type='submit' name='loginSubmit'>Log Inn</button>
            </form>"; ?>
            </div> <?php   
        }
    ?>

    
    
    <?php
    if(!isset($_SESSION['id']))
        { ?>
            <div class="logInContainer"> <?php
            echo "<form method='POST' action='".getSignup($db)."'>
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