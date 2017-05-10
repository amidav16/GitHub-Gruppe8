<?php

require '../vendor/autoload.php';
require '../PHP/connection.php';

use Carbon\Carbon;

Carbon::setLocale('no');

$events = Comments::all();

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
        <link rel="stylesheet" type="text/css" href="/CSS/campusVulkan.css"> 
    </head>

    <body>

    <?php $page = 'three'; require('header.php'); ?>    
           
    <div id="Redbox">
        <p class="subText">CHALLENGE:</p>
        <p class="mainText">50-LAPPEN</p>  
    </div>
        
    <section id="winPrize">
        <a href="/PHP/commentsection.php"><h1>Vinn kaffekort!</h1></a>
        <p>Hva kan man gjøre med en 50-lapp? Delta her: (NEI takk, vi vil ikke se penisen din pakket inn i en). Det mest fantasifulle og morsomme bidraget vinner et kaffekort fra kantina. Vi trekker én vinner den 10. hver måned - når lommeboken blabla er tom...
        </p>
    </section>
      
   <section>
      <div class="container">
        <div class="cards">

          <?php 
              foreach ($events as $event) 
              { 
                  require '../PHP/card.php'; 
              } 
          ?>

        </div>
      </div>
   </section>



    <?php require '../PHP/footer.php'; ?>

    </body>
</html>