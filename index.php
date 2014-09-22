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

        <!-- Our team Section -->
        <span class="breakPoint" id="services"></span>
        <div class="section" >
            <div class="container">
                <h2 class="lg-title lg-title-border">Dienstleistungen</h2>
                <p class="sub-title">
                    Verschaffen Sie sich einen detaillierten Überblick über unsere Leistungen.
                </p>

                <div class="row team-grid">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="profile-circle openIn wow" data-wow-duration="0.75s">
                            <div class="hover-content ">
                                <div class="profile leistung-1 lg-size"></div>
                                <div class="content-circle content-center"></div>
                            </div>
                            <h3>Reparatur</h3>
                            <hr>
                            <p>
                                Wir reparieren alles, z.B. Reparatur an Kunstoffteilen und Lackierung von Fegeln
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="profile-circle openIn wow" data-wow-delay="0.5s" data-wow-duration="0.75s">
                            <div class="hover-content ">
                                <div class="profile profile-2 lg-size"></div>
                                <div class="content-circle content-center">
                                    <ul class="circle-icons icons-list">                                       
                                        <li class="md-trigger" data-modal="modal-1">
                                            <a >
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </li>

                                        <li class="md-trigger" data-modal="modal-2">
                                            <a >
                                                <i class="fa fa-comment"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>                            
                            </div>
                            <h3>Amy Perez</h3>
                            <hr>
                            <p>Amy has qualifications in project management to ensure that the projects run smoothly from start to finish.</p>
                        </div>
                    </div>

                    <div class="md-modal" id="modal-1">
                        <div class="md-content">
                            <div class="icon-close md-close"></div>
                            <div class="container">
                                <div class="body">
                                    <h2 class="title">Some nice title 1</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md-modal" id="modal-2">
                        <div class="md-content">
                            <div class="icon-close md-close"></div>
                            <div class="container">
                                <div class="body">
                                    <h2 class="title">Some nice title 2</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="profile-circle openIn wow" data-wow-delay="1s" data-wow-duration="0.75s">
                            <div class="hover-content ">
                                <div class="profile profile-3 lg-size"></div>
                                <div class="content-circle content-center">
                                    <ul class="circle-icons icons-list">
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Ben Berry</h3>
                            <hr>
                            <p>Ben is our Junior Designers. Ben is a web designer with knowledge of HTML and CSS and supports Nicole on projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="profile-circle openIn wow" data-wow-delay="1.5s" data-wow-duration="0.75s">
                            <div class="hover-content">
                                <div class="profile profile-4 lg-size"></div>
                                <div class="content-circle content-center">
                                    <ul class="circle-icons icons-list">
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <h3>Adele Taylor</h3>
                            <hr>
                            <p>Adele has also worked with some big names and her designs have won her a number of industry awards. She is awesome UI designer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <span class="breakPoint" id="s13"></span>
        <div class="bg-grey section">
            <div class="container">
                <h2 class="lg-title lg-title-border">Dienstleistungen in Bilder</h2>

                <ul class="filter-tabs">
                    <li class="filter active" data-filter="mix"><span>Alle</span>
                    </li>
                    <li class="filter" data-filter="apps"><span>Reparatur</span>
                    </li>
                    <li class="filter" data-filter="devices"><span>Devices</span>
                    </li>
                    <li class="filter" data-filter="web"><span>Webdesign</span>
                    </li>
                </ul>
                <div class="md-overlay"></div>
                <ul class="row" id="Grid">
                    <!-- Item 1 -->
                    <li class="col-md-4 col-sm-6 mix devices">
                        <div class="hover-content wow easeUp" data-wow-delay="0.25s">
                            <img src="custom/image/bilder/IMG_5796.jpeg" class="img-responsive" 
                                 alt="Bus">
                            <div class="top-part hidden-xs">
                                <a href="custom/image/bilder/IMG_5796.jpeg" 
                                   title="Bus" 
                                   class="fancybox" 
                                   rel="group" style="color: white; ">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Bus Vorbereitung</h3>
                            </div>
                        </div>
                    </li>


                    <!-- Item 2 -->
                    <li class="col-md-4 col-sm-6 mix apps web">
                        <div class="hover-content wow easeUp" data-wow-delay="0.25s">
                            <img src="custom/image/bilder/IMG_5805.jpeg" class="img-responsive" 
                                 alt="Auto">
                            <div class="top-part hidden-xs">
                                <a href="custom/image/bilder/IMG_5805.jpeg" 
                                   title="auto" 
                                   class="fancybox" 
                                   rel="group" style="color: white;">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Bus Vorbereitung</h3>
                            </div>
                        </div>
                    </li>

                    <!-- Item 3 -->
                    <li class="col-md-4 col-sm-6 mix apps">
                        <div class="hover-content wow easeUp" data-wow-delay="0.75s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Portfolio - application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                    </li>

                    <!-- Item 4 -->
                    <li class="col-md-4 col-sm-6 mix devices">
                        <div class="hover-content wow easeUp" data-wow-delay="0.6s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Apple Macbook Pro">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>                       
                    </li>

                    <!-- Item 5 -->
                    <li class="col-md-4 col-sm-6 mix web">
                        <div class="hover-content wow easeUp" data-wow-delay="0.35s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Webdesign">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>                      
                    </li>

                    <!-- Item 6 -->
                    <li class="col-md-4 col-sm-6 mix apps">
                        <div class="hover-content wow easeUp" data-wow-delay="0.85s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>                       
                    </li>
                </ul>
            </div>
        </div>

        <!-- Background Image Section - 2 -->
        <div class="bg-12 bg-center bg-fixed bg-cover">
            <div class="filling-section bg-filter"></div>
        </div>

        <!-- Contact us Section -->
        <span class="breakPoint" id="s5"></span>
        <div class="section auto-height">
            <div class="container">
                <h2 class="lg-title lg-title-border">Contact us</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-7">

                        <!-- Contact Form -->
                        <div id="form-messages"></div>
                        <form class="form-horizontal" role="form" id="ajax-contact" method="post">
                            <div class="form-group icon">
                                <label for="name" class="col-sm-3 control-label">Full name</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <input type="text" class="form-control" id="name" placeholder="Full name" name="name" required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group icon">
                                <label for="email" class="col-sm-3 control-label">Email</label>
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
                                <h4>Our Location</h4>
                                <p>885 3rd Ave, NY 10022</p>
                            </li>
                            <li>
                                <h4>Email Us</h4>
                                <p>
                                    <a href="mailto:#">influence.bootstrap@gmail.com</a>
                                </p>
                            </li>
                            <li>
                                <h4>Business Hours</h4>
                                <ul class="list-unstyled">
                                    <li>Mo - Fr: 9am to 6pm</li>
                                    <li>Sa, Su: 9am to 2pm</li>
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

        <!-- Contact Form -->
        <script src="assets/js/min/contact-form.min.js"></script>

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

