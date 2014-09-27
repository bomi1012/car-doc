<?php
require_once 'scr/classes/include_classes.php';
$base = new Application();
$bean = $base->getBean();
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php include_once 'scr/php/partials/head.php'; ?>
    </head>
    <body>  
        <!-- Section: Main Navigation + Kontakt | Position: top -->    
        <?php include_once 'scr/php/partials/block_mainNavigation.php'; ?>

        <!--  Section Header Banner | Title + Text -->
        <span class="breakPoint" id="sTop"></span>
        <?php include_once 'scr/php/partials/block_header.php'; ?> 

        
        
        <?php $bean->buildPage(); ?> 
        
        
        <!-- Contact us Section -->
        <span class="breakPoint" id="contacts"></span>
        <?php include_once 'scr/php/partials/contact_form.php'; ?>  

        <!-- Google Maps -->
        <div id="map"></div>

        <!-- Back to top -->
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- Scripts -->
        <?php include_once 'scr/php/partials/scripts.php'; ?> 

        <!-- Footer -->
        <?php include_once 'scr/php/partials/block_footer.php'; ?> 

    </body>
</html>

<!--
Car-Doc GmbH 
Große Ahlmühle 11
76865 Rohrbach
 
 
Eugen Luppow
Geschäftsführer
Mobil:  0176 22995033
Fax:     06349 9964902
EMail: e.luppow@car-doc.info 

Olesja Laier
Büro
Phone: 06349 996490-6
Fax:      06349 9964902
EMail:    o.laier@car-doc.info
 
Tamara Seidel
Büro
Phone: 06349 996490-1
Fax:      06349 9964902
EMail:   t.seidel@car-doc.info
-->

