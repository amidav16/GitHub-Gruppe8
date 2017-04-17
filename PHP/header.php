<header>    
        
    <div id="headerContainer">
        <!--<img id="headerCampus" src= "CampusVulkan.PNG" alt="Westerdals Oslo ACT - Campus Vulkan">-->
        <h2 id= CampusVulkan>Westerdals Oslo Act, Campus Vulkan</h2>
            
        <div id="topBorder"></div>  
         
            <!--Linker til eksterne Westerdals-sider -->
        
            <section id="alleMenyBarn">
                <a class="pngLinker" id="facebookLogo" href="http://www.facebook.com/westerdalsosloact"><img src="/Bilder/facebookLogo.png" alt="facebookLogo"></a>
                <a class="pngLinker" id="instagramLogo" href="http://www.instagram.com/westerdalsact"><img src="/Bilder/instagramLogo.png" alt="instagramLogo"/></a>
                <a class="pngLinker" id="westerdalsLogo" href="http://www.westerdals.no/"><img src="/Bilder/westerdalsLogo.png" alt="westerdalsLogo"/></a>
                <a class="pngLinker" id="twitterLogo" href= "http://twitter.com/westerdalsact"><img src="/Bilder/twitterLogo.png" alt="twitterLogo"/></a>
            </section>
        
            <!--Slutt linker til eksterne sider -->
        
        </div>
        
        <!--Hovedmeny linker til undersider-->
            
                <ul class="meny">
                    <li><a <?php echo ($page == 'one') ? "class='active'" : ""; ?> href="/index.php">hjem</a></li><!--
                    --><li><a <?php echo ($page == 'two') ? "class='active'" : ""; ?> href="/PHP/lonningsdag.php">lønningsdag</a></li><!--
                    --><li><a <?php echo ($page == 'three') ? "class='active'" : ""; ?> href="/PHP/femtilappen.php">50-lappen</a></li><!--
                    --><li><a <?php echo ($page == 'four') ? "class='active'" : ""; ?> href="/PHP/gratis.php">gratis</a></li>
                </ul>
             

        <div id="map_canvas"></div>
    

        <!-- Slutt linker Hovedmeny--> 
    </header>