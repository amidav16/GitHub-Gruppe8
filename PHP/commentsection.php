<?php
    date_default_timezone_set('Europe/Oslo');
    include '../PHP/dbh.inc.php';
    include '../PHP/comments.inc.php';

    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);


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
            echo "<form method='POST' action='".setComments($conn)."'>
                <div>Navn</div>
                <textarea name='uid'></textarea><br>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <div>Tittel</div>
                <textarea name='title'></textarea><br>
                <div>Melding</div>
                <textarea name='message'></textarea><br>
                <div>Antall likes</div>
                <textarea name='likes'></textarea><br>
                <button type='submit 'name='commentSubmit'>Comment</button>
                </form>";
                
            ?>
        
        <?php require '../PHP/footer.php'; ?>
            
    </body>
</html>