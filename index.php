
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="nettside for studenter ved Westerdals">
<meta name="author" content="Ine Målbakken">

    <title>Campus Vulkan</title>
    <link rel="stylesheet" type="text/css" href="/CSS/campusVulkan.css">
    
   
    
</head>


    <body>
        
        <?php $page = 'one'; include('PHP/header.php'); ?>
      
        
        <!--Dette gjør så header forsvinner ved scroll-down og popper opp så fort man scroller oppover igjen-->
        
        <script src="/JS/scrollHeader.js"></script>
        
        
        
        <!--Dette er SlideShowet-->
        
        <div id="slider"></div>
        
        <script src="/JS/slideShow.js"></script>
        
        <!--Slutt SlideShow-->
        

        
        <?php require 'PHP/footer.php'; ?>
        
        
        

    </body>
    
    
 
    
</html>