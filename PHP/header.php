<?php ob_start(); ?>

<header>    
        
    <div id="headerContainer">
        <!--<img id="headerCampus" src= "CampusVulkan.PNG" alt="Westerdals Oslo ACT - Campus Vulkan">-->
        <h2 id= CampusVulkan>Westerdals Oslo Act, Campus Vulkan</h2>
            
        <div id="topBorder"></div>  
         
            <!--Linker til eksterne Westerdals-sider -->
        
            <section id="alleMenyBarn">
                <a class="pngLinker" id="facebookLogo" href="http://www.facebook.com/westerdalsosloact"><img src="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/Bilder/facebookLogo.png" alt="facebookLogo"></a>
                <a class="pngLinker" id="instagramLogo" href="http://www.instagram.com/westerdalsact"><img src="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/Bilder/instagramLogo.png" alt="instagramLogo"/></a>
                <a class="pngLinker" id="westerdalsLogo" href="http://www.westerdals.no/"><img src="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/Bilder/westerdalsLogo.png" alt="westerdalsLogo"/></a>
                <a class="pngLinker" id="twitterLogo" href= "http://twitter.com/westerdalsact"><img src="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/Bilder/twitterLogo.png" alt="twitterLogo"/></a>
            </section>
        
            <!--Slutt linker til eksterne sider -->
        
        </div>
        
        <!--Hovedmeny linker til undersider-->
            
                <ul class="meny">
                    <li><a <?php echo ($page == 'one') ? "class='active'" : ""; ?> href="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/index.php">hjem</a></li><!--
                    --><li><a <?php echo ($page == 'two') ? "class='active'" : ""; ?> href="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/PHP/lonningsdag.php">payday</a></li><!--
                    --><li><a <?php echo ($page == 'three') ? "class='active'" : ""; ?> href="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/PHP/femtilappen.php">50-lappen</a></li><!--
                    --><li><a <?php echo ($page == 'four') ? "class='active'" : ""; ?> href="http://tek.westerdals.no/~hamesp16/GitHub-Gruppe8/PHP/gratis.php">mayday</a></li>
                </ul>
             

        <div id="map_canvas"></div>
    

        <!-- Slutt linker Hovedmeny--> 
    </header>