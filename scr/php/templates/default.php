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

        <!-- Piwik -->
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u = "//car-doc.info/piwik/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 1]);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <noscript><p><img src="//car-doc.info/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
        <!-- End Piwik Code -->
        
        
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