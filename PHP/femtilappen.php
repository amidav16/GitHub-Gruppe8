<?php

	session_start();

    date_default_timezone_set('Europe/Oslo');
    require 'dbh.inc.php';
    include 'comments.inc.php';

    $eventsQuery = $db->query(getQuery());
	
	while($row = $eventsQuery->fetch_object())
	{
	  $events[] = $row;
	}

  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Campus Vulkan</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../CSS/campusVulkan.css"> 
    </head>

    <body>

    <?php $page = 'three'; include('header.php'); ?>    
           
    <div id="Redbox">
        <p class="subText">CHALLENGE:</p>
        <p class="mainText">50-LAPPEN</p>  
    </div>
        
    <section id="winPrize">
        <h1><a href="commentsection.php">Vinn kaffekort!</a></h1>
        <p>Hva kan man gjøre med en 50-lapp? Vi trenger DITT verdifulle og unike forslag til hva man kan bruke en 50-lapp til! Det mest fantasifulle og/eller hjelpsomme bidraget vinner et kaffekort fra kantina. Vi trekker én vinner den 10. hver måned – når lommeboken er slunken og gratis kaffe blir som sendt fra oven ❤ Delta 
        <a class="goToReg" href="commentsection.php">HER!</a></p>
    </section>
      
   <section>
      <div class="cardsContainer">
        <div class="cards">

          <?php foreach ($events as $event) 
            { 
              require 'card.php';
            } ?>

        </div>
      </div>
   </section>



    <?php require 'footer.php'; ?>

    </body>
</html>