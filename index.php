<!DOCTYPE html>
<?php
require_once 'scr/includes.php';
$app = new Application();
$bean = $app->getBean();
?>

<html lang="en">
    <head>
        <?php echo $app->title(); ?>
        <?php echo $app->getMetaTags(); ?>
        <?php echo $app->getStyleScheet(); ?>  

        <script type="text/javascript" src="custom/js/jquery-1.8.3.min.js"></script>        
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="custom/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
        <script type="text/javascript" src="custom/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>

        <link rel="stylesheet" href="custom/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="custom/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="custom/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        <link rel="stylesheet" href="custom/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="custom/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });

        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".various").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '70%',
                    height: '70%',
                    autoSize: false,
                    closeClick: true,
                    openEffect: 'none',
                    //closeEffect	: 'none'
                });
            });

        </script>

    </head>

    <body>                
        <!-- Section Main Navigation | Kontakt -->        
        <div id="mainNavigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">                
                <?php include_once 'scr/includes/container_mainNavigation.php'; ?>
            </div>
        </div>

        <!--  Section Header Banner | Title + Text -->
        <span class="breakPoint" id="sTop"></span>
        <div class="text-center bg-header-mb bg-center bg-cover">
            <div class="section bg-filter">
                <div class="container">
                    <?php include_once 'scr/includes/container_header.php'; ?> 
                </div>
            </div>
        </div>

        <!-- Section Profile | 4 rubric -->
        <span class="breakPoint" id="profile"></span>
        <div class="section p-no-top">
            <div class="container">
                <?php include_once 'scr/includes/container_profile.php'; ?>       
            </div>
        </div>


        <!-- About us section teil 2 -->
        <span class="breakPoint"></span>        
        <div class="bg-grey section_mb">
            <div class="container">   
                <?php include_once 'scr/includes/container_profile_short.php'; ?>                  
            </div>
        </div>

        <!-- Background Image Section - 1 -->
        <div class="bg-2-custom-mb bg-center bg-fixed bg-cover">
            <div class="filling-section bg-filter"></div>
        </div>

        <!-- Section Services -->
        <span class="breakPoint" id="services"></span>
        <div class="section" >
            <div class="container">
               <?php include_once 'scr/includes/container_services.php'; ?>  
            </div>
        </div>

        <!-- Portfolio Section -->
        <span class="breakPoint" id="s13"></span>
        <div class="bg-grey section">
            <div class="container">
                <?php include_once 'scr/includes/container_services_gallery.php'; ?>                
            </div>
        </div>

        <!-- Background Image Section - 2 -->
        <div class="bg-12 bg-center bg-fixed bg-cover">
            <div class="filling-section bg-filter"></div>
        </div>

        <!-- Contact us Section -->
        <span class="breakPoint" id="contacts"></span>
        <div class="section auto-height">
            <div class="container">
                <h2 class="lg-title lg-title-border">Kontakte</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-7">

                        <!-- Contact Form -->
                        <div id="form-messages"></div>
                        <form class="form-horizontal" role="form" id="ajax-contact" method="post">
                            <div class="form-group icon">
                                <label for="name" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <input type="text" class="form-control" id="name" placeholder="Full name" name="name" required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group icon">
                                <label for="email" class="col-sm-3 control-label">E-mail</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group icon">
                                <label for="Message" class="col-sm-3 control-label">Message</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <textarea class="form-control" rows="8" id="Message" placeholder="Message" name="message" required></textarea>
                                        <i class="fa fa-comment"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group icon">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <i class="fa fa-paper-plane-o"></i>Send Message</button>
                                </div>
                            </div>
                        </form>

                        <div class="space visible-xs"></div>
                    </div>

                    <div class="col-md-6 col-sm-5">
                        <ul class="list-unstyled info-bar">
                            <li>
                                <h4>Additional info</h4>
                                <p>If you have any questiong about our products or something else, please email us or call us. We'll get in touch with you as soon as possible.</p>
                            </li>
                            <li>
                                <h4>Adresse</h4>
                                <p>Große Ahlmühle 11, 76865 Rohrbach</p>
                            </li>
                            <li>
                                <h4>E-mail</h4>
                                <p>
                                    <a href="mailto:e.luppov@car-doc.info">e.luppov@car-doc.info</a>
                                </p>
                            </li>
                            <li>
                                <h4>Öffnungszeiten</h4>
                                <ul class="list-unstyled">
                                    <li>Mo - Fr: 8:00 - 18:00</li>
                                    <li>Sa, So: nach Vereinbarung</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div id="map"></div>

        <!-- Back to top -->
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- Scripts -->

        <!-- Modernizr-->
        <script src="assets/js/min/modernizr.min.js"></script>

        <!-- Start animations -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.6/wow.min.js"></script>

        <!-- Main navigation -->
        <script src="assets/js/min/jquery.nav.min.js"></script>

        <!-- Smooth Scrolling -->
        <script src="assets/js/min/jquery.nicescroll.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="assets/js/min/bootstrap.min.js"></script>

        <!-- Slidesho - Slippry.js -->
        <script src="assets/js/min/slippry.min.js"></script>

        <!-- Knobs -->
        <script src="assets/js/min/jquery.knob.min.js"></script>

        <!-- Contact Form 
        <script src="assets/js/min/contact-form.min.js"></script> -->

        <!-- Filter - portfolio grid -->
        <script src="assets/js/min/jquery.mixitup.min.js"></script>

        <!-- Modal Windows -->
        <script src="assets/js/min/classie.min.js"></script>
        <script src="assets/js/min/modalEffects.min.js"></script>
        <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/js/';
        </script>
        <script src="assets/js/min/cssParser.min.js"></script>

        <!-- Google Maps -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/min/initmap.min.js"></script>

        <!-- Must be last of all js -->
        <script src="assets/js/influence.js"></script>
        <script src="custom/js/js_mb.js"></script>




        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="text">
                            Â© 2014 Influence. All rights reserved. Theme by Jiri Cermak.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="dark-icons icons-list ">
                            <li>
                                <a href="#" title="Follow us">
                                    <i class="fa fa-anchor"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Follow us">
                                    <i class="fa twitter fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Follow us">
                                    <i class="fa fa-tumblr tumblr"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Follow us">
                                    <i class="fa fa-facebook facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Follow us">
                                    <i class="fa fa-youtube-play youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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

