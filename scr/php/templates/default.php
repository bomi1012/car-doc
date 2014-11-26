<!DOCTYPE html>
<html lang="en">
    <?php
    require_once 'scr/classes/include_classes.php';
    $base = new Application();
    $bean = $base->getBean();
    ?>
    <head>       
        <?php include_once 'scr/php/partials/head.php'; ?>

        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>  

        <!-- google analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-57011316-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- Section: Main Navigation + Kontakt | Position: top -->    
        <?php include_once 'scr/php/partials/block_mainNavigation.php'; ?>

        <!--  Section Header Banner | Title + Text -->
        <span class="breakPoint" id="sTop"></span>
<?php include_once 'scr/php/partials/block_header.php'; ?> 

        <span class="breakPoint" id="profile"></span>
<?php include_once 'scr/php/partials/tabsnavigation.php'; ?>   

        <span class='breakPoint'></span>     
        <?php include_once 'scr/php/partials/bean_counter.php'; ?> 

        <div class='bg-2-custom-mb bg-center bg-fixed bg-cover'>
            <div class='filling-section bg-filter'></div>
        </div>

        <span class='breakPoint' id='services'></span>
<?php include_once 'scr/php/partials/bean_circlel_grid_modal.php'; ?> ;

        <span class='breakPoint'></span>
        <?php include_once 'scr/php/partials/bean_select_gallery.php'; ?> 

        <div class='bg-12 bg-center bg-fixed bg-cover'>
            <div class='filling-section bg-filter'></div>
        </div>  

        <!-- Contact us Section -->
        <span class="breakPoint" id="contacts"></span>
<?php include_once 'scr/php/partials/contact_form.php'; ?>  

        <!-- Google Maps -->
        <div id="map"></div>

        <!-- Back to top -->
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </a>


        <!-- Footer -->
<?php include_once 'scr/php/partials/block_footer.php'; ?> 


        <!-- Scripts -->
<?php include_once 'scr/php/partials/scripts.php'; ?> 
    </body>
</html>