<!DOCTYPE html>
<?php
require_once 'scr/Application.php';
$app = new Application();
?>
<html lang="en">
    <head>
        <title><?php echo $app->title(); ?></title>

        <!-- Meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Influence is based on the newest Twitter Bootstrap 3.2, this one page template is fully responsive, easy customize and ready for your business.">
        <meta name="keywords" content="bootstrap, design, template, templates, theme, themes, business, portfolio, websites, webdesign, one page" />
        <meta name="author" content="Jiri Cermak">

        <!-- Bootstrap framework style-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom style -->
        <link href="assets/css/influence.min.css" rel="stylesheet">

        <!-- Font Awesome Icons   -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Google Fonts - Lato -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

        <!-- CSS animations -->
        <link href="assets/css/animate.min.css" rel="stylesheet">

        <!-- Modal Windows - portfolio item  -->
        <link href="assets/css/ModalWindowEffects.css" rel="stylesheet"> 

        <!-- Slideshow-->
        <link href="assets/css/slippry.min.css" rel="stylesheet">

        <!-- Colors Themes -->
        <!--<link href="assets/css/themes/blue.min.css" rel="stylesheet" id="colors">-->
        <!--<link href="assets/css/themes/light-blue.min.css" rel="stylesheet" id="colors">-->
        <link href="assets/css/themes/red.min.css" rel="stylesheet" id="colors">
        <!--<link href="assets/css/themes/green.min.css" rel="stylesheet" id="colors">-->
        <!--<link href="assets/css/themes/yellow.min.css" rel="stylesheet" id="colors">-->

        <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="custom/css/style_mb.css" rel="stylesheet">
        <link href="custom/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>

        <!-- Main Navigation -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div>
                    <span class="navbar-brand-contact-mb"> 
                        <span class="text-primary"><i class="fa fa-map-marker "></i></span> Große Ahlmuhle 11, Rohrbach                         
                    </span>


                    <span class="navbar-brand-contact-mb"> 
                        <span class="text-primary"><i class="fa fa-phone"></i></span> 0176 22995033                         
                    </span>
                    <span class="navbar-brand-contact-mb"> 
                        <span class="text-primary"><i class="fa fa-envelope-o"></i></span> e.luppov@car-doc.info                         
                    </span>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand" data-wow-delay="0s">
                        <span class="text-primary">Car</span>-Doc</span>
                </div>



                <div class="collapse navbar-collapse " id="bs-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" id="nav">
                        <li class="dropdown active">
                            <a href="#sTop" class="fadeIn">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#about_us" class="fadeIn">Über uns</a>
                        </li>
                        <li class="dropdown">
                            <a href="#service" class="fadeIn">Dienstleistungen</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s3" class="fadeIn">Aktuelles</a>
                        </li>
                        <li class="dropdown">
                            <a href="#s5" class="fadeIn">Contact</a>
                        </li>
                    </ul>
                </div>
                <div style="width: 100%">
                    <div>
                        <span class="navbar-brand-left-mb">
                            <span class="text-primary">Lackservice PKW, LKW</span> & 
                            <span class="text-primary">Busse</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Section -->
        <span class="breakPoint" id="sTop"></span>
        <div class="text-center bg-5-custom-mb bg-center bg-cover">
            <div class="section bg-filter">
                <div class="container">
                    <div class="jumbotron trn h-center v-center">
                        <h1 class="wow fadeIn" data-wow-delay=".4s"> Qualität in jedem Bereich</h1>
                        <div class="space-sm"></div>
                        <p class="wow fadeIn left-padding-baner" data-wow-delay="0.45s">

                        </p>
                        <div class="space-sm"></div>
                        <a href="#about_us" class="scroll">
                            <i class="fa fa-angle-down slidedown  wow fadeIn" data-wow-delay="0.5s"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <span class="breakPoint" id="about_us"></span>
        <div class="section p-no-top">
            <div class="container">
                <!-- Nav Tabs -->
                <ul class="lg-tabs">
                    <li class="active  ">
                        <a href="#responsive" data-toggle="tab" data-wow-delay="0.1s">
                            <i class="fa fa-home"></i>
                            <h3>Über uns</h3>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#ready" data-toggle="tab" data-wow-delay="0.2s">
                            <i class="fa fa-calendar"></i>
                            <h3>Öffnungszeiten</h3>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#code" data-toggle="tab" data-wow-delay="0.3s">
                            <i class="fa fa-book"></i>
                            <h3>Kontakte</h3>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#font" data-toggle="tab" data-wow-delay="0.4s">
                            <i class="fa fa-lightbulb-o"></i>
                            <h3>Unsere Kompetenzen</h3>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="space-lg"></div>
                <div class="tab-content lg-tab-content">
                    <div class="tab-pane active in" id="responsive">
                        <div class="row">
                            <div class="col-md-6 fadeIn wow">
                                <!--                                <h2 class="big-title text-primary">Fully responsive</h2>-->
                                <p class="text-block">We design the websites fully responsive for each devices. It is means that you can comfortable browse our websites on your smartphone, tablet and other devices.
                                </p>
                                <p class="text-block">You can try it now on your laptop, just resize your browser window and every element will start to adapt to new resolution.</p>
                                <p class="text-block">We design the websites fully responsive for each devices. It is means that you can comfortable browse our websites on your smartphone, tablet and other devices.
                                </p>
                                <p class="text-block">You can try it now on your laptop, just resize your browser window and every element will start to adapt to new resolution.</p>
                            </div>
                            <div class="col-md-6 fadeIn wow">
                                <img class="img-mw450" src="custom/image/about_us/logo1.png" alt="Influence - Responsive Design">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane animated fadeIn" id="ready">
                        <div class="row">
                            <div class="col-md-8 about_uns_time">
                                <div style="width: 200px; float: left ">
                                    <span class="text-primary"> Montag - Freitag:</span> 
                                </div>
                                <div> 8:00 - 18:00 </div>

                                <div class="space-sm"></div>

                                <div style="width: 200px; float: left ">
                                    <span class="text-primary"> Sammstag - Sonntag:</span> 
                                </div>
                                <div> nach Vereinbarung </div>

                                <div class="space-sm-60"></div>  

                                <div style="float: left ">
                                    Möchten Sie einen Termin vereinbaren oder haben Sie Frage zu uns.
                                    <br />Rufen Sie Rund um die Uhr unseren Kundenservice an oder mailen Sie uns 
                                    
                                    

                                </div>
                                <div class="space-sm"></div>
                                <div style="width: 100px; float: left ">
                                    <span class="text-primary"> Telefon:</span> 
                                </div>
                                <div> (0172) 620 620 2 </div>

                                <div class="space-sm"></div>
                                <div style="width: 100px; float: left ">
                                    <span class="text-primary"> E-Mail:</span> 
                                </div>
                                <div> p.wanzeck@car-doc.info </div>
                            </div>
                            <div class="col-md-4">
                                <img class="img-mw350" src="custom/image/about_us/open-door.jpeg" alt="Influence theme is ready for use">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane animated fadeIn" id="code">
                        <div class="row">                                                
                            <div class="col-md-8 about_uns_time">
                                <h2 class="big-title text-primary">Kundenservice</h2>    
                                <div style="width: 30px; float: left ">
                                    <span class="text-primary"> <i class="fa fa-map-marker"></i></span> 
                                </div>
                                <div> Große Ahlmühle 11, 76865 Rohrbach </div>

                                <div class="space-sm"></div>

                                <div style="width: 30px; float: left ">
                                    <span class="text-primary"> <i class="fa fa-phone-square"></i></span> 
                                </div>
                                <div> (0172) 620 620 2 </div>

                                <div class="space-sm"></div>
                                
                                <div style="width: 30px; float: left ">
                                    <span class="text-primary"> <i class="fa fa-envelope-square"></i></span> 
                                </div>
                                <div> p.wanzeck@car-doc.info </div>

                      <div class="space-sm-60"></div>  
                                
                                <div style="float: left ">
                                    <span class="text-primary">Wir sind für Sie jeden Tag 24 Stunden erreichtbar!</span> 
                                </div>
                                 
                            </div>
                            <div class="col-md-4">
                                <img class="img-mw350" src="custom/image/about_us/open-door.jpeg" alt="Influence theme is ready for use">
                            </div>


                        </div>
                    </div>

                    <div class="tab-pane  animated fadeIn" id="font">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="big-title text-primary">Font Awesome</h2>
                                <p class="text-block">Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.</p>
                                <ul class="features-list">
                                    <li>
                                        <i class="fa fa-play"></i>Kundenservice / Kundenbetreuung / Beratung</li>
                                    <li>
                                        <i class="fa fa-play"></i>Innovative Produktionstechniken</li>
                                    <li>
                                        <i class="fa fa-play"></i>Zukunftsorientierte Ausrichtung</li>
                                    <li>
                                        <i class="fa fa-play"></i>Qualität & Umwelt</li>
                                    <li>
                                        <i class="fa fa-play"></i>Flexibilität</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img class="img-mw450" src="assets/img/font-awesome-icons.png" alt="Font Awesome">
                            </div>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>


        <!-- About us section teil 2 -->
        <span class="breakPoint"></span>        
        <div class="bg-grey section_mb">
            <div class="container">   
                <h2 class="lg-title lg-title-border">Unternehmen auf einen Blick</h2>

                <div class="col-md-4 text-position-center wow">
                    <h3 class="short_counter">
                        <span class="text-primary">
                            <i class="fa fa-car"></i>                                
                        </span>
                        <span class="counter">4678</span>
                    </h3>
                    <h4>Fahrzeuge behandeln wir pro Jahr</h4>
                </div>
                <div class="col-md-4 text-position-center">
                    <h3 class="short_counter">
                        <span class="text-primary">
                            <i class="fa fa-clock-o"></i>                                
                        </span>
                        <span class="counter">61320</span>
                    </h3>
                    <h4>Stunden pro Jahr stehem wir zu Verfügung</h4>
                </div>
                <div class="col-md-4 text-position-center">
                    <h3 class="short_counter">
                        <span class="text-primary">
                            <i class="fa fa-cubes"></i>                                
                        </span>
                        <span class="counter">34533345</span>
                    </h3>
                    <h4>Quadratmeter ist unsere Arbeitsplatz</h4>
                </div>     
            </div>
        </div>
        <!-- Background Image Section - 1 -->
        <div class="bg-2-custom-mb bg-center bg-fixed bg-cover">
            <div class="filling-section bg-filter">Test</div>
        </div>

        <!-- Our team Section -->
        <span class="breakPoint" id="service"></span>
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
                                        <li>
                                            <a href="sdfsdf#sdfsdf" title="Follow us">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#sdfsdf" title="Follow us">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow us">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#sfsdf" title="Follow us">
                                                <i class="fa fa-facebook"></i>
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
                    <!-- mix - select all, devices - filter only devices, md-trigger - class for modal window -->
                    <li class="col-md-4 col-sm-6 mix devices md-trigger " data-modal="modal-1">
                        <div class="hover-content wow easeUp" data-wow-delay="0.5s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Portfolio - application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                        <div class="md-modal" id="modal-1">
                            <div class="md-content">
                                <div class="icon-close md-close"></div>
                                <div class="container">
                                    <div class="body">
                                        <h2 class="title">Some nice title</h2>
                                        <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                                        <div class="space"></div>
                                        <img class="img-responsive center-block" alt="Apple Macbook Pro" src="assets/img/rmbp-sm.png">
                                        <div class="space"></div>
                                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>

                                        <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
                                        <hr class="hr">
                                        <ul class="list-unstyled info-list">
                                            <li><strong>Category: </strong>Websites
                                            </li>
                                            <li><strong>Services in project: </strong>Webdesing, UX, SEO
                                            </li>
                                            <li><strong>Client: </strong>Google Inc.
                                            </li>
                                            <li><strong>Date released: </strong>February 2014</li>
                                        </ul>
                                        <hr class="hr">
                                        <div class="inline-btn">
                                            <a class="btn btn-primary btn-xlg"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                                            <a class="btn btn-primary-trn btn-xlg"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Item 2 -->
                    <li class="col-md-4 col-sm-6 mix apps web md-trigger" data-modal="modal-2">
                        <div class="hover-content wow easeUp" data-wow-delay="0.25s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Websites Layout">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                        <div class="md-modal" id="modal-2">
                            <div class="md-content">
                                <div class="icon-close md-close"></div>
                                <div class="container">
                                    <div class="body">
                                        <h2 class="title">Some nice title</h2>
                                        <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                                        <div class="space"></div>
                                        <img class="img-responsive center-block" alt="Macbook Pro" src="assets/img/rmbp-sm.png">
                                        <div class="space"></div>
                                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>

                                        <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
                                        <hr class="hr">
                                        <ul class="list-unstyled info-list">
                                            <li><strong>Category: </strong>Websites
                                            </li>
                                            <li><strong>Services in project: </strong>Webdesing, UX, SEO
                                            </li>
                                            <li><strong>Client: </strong>Google Inc.
                                            </li>
                                            <li><strong>Date released: </strong>February 2014</li>
                                        </ul>
                                        <hr class="hr">
                                        <div class="inline-btn">
                                            <a class="btn btn-primary btn-xlg"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                                            <a class="btn btn-primary-trn btn-xlg"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Item 3 -->
                    <li class="col-md-4 col-sm-6 mix apps md-trigger" data-modal="modal-3">
                        <div class="hover-content wow easeUp" data-wow-delay="0.75s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Portfolio - application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                        <div class="md-modal" id="modal-3">
                            <div class="md-content">
                                <div class="icon-close md-close"></div>
                                <div class="container">
                                    <div class="body">
                                        <h2 class="title">Some nice title</h2>
                                        <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                                        <div class="space"></div>
                                        <img class="img-responsive center-block" alt="Macbook Pro" src="assets/img/rmbp-sm.png">
                                        <div class="space"></div>
                                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>

                                        <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
                                        <hr class="hr">
                                        <ul class="list-unstyled info-list">
                                            <li><strong>Category: </strong>Websites
                                            </li>
                                            <li><strong>Services in project: </strong>Webdesing, UX, SEO
                                            </li>
                                            <li><strong>Client: </strong>Google Inc.
                                            </li>
                                            <li><strong>Date released: </strong>February 2014</li>
                                        </ul>
                                        <hr class="hr">
                                        <div class="inline-btn">
                                            <a class="btn btn-primary btn-xlg"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                                            <a class="btn btn-primary-trn btn-xlg"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Item 4 -->
                    <li class="col-md-4 col-sm-6 mix devices md-trigger" data-modal="modal-4">
                        <div class="hover-content wow easeUp" data-wow-delay="0.6s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Apple Macbook Pro">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                        <div class="md-modal" id="modal-4">
                            <div class="md-content">
                                <div class="icon-close md-close"></div>
                                <div class="container">
                                    <div class="body">
                                        <h2 class="title">Some nice title</h2>
                                        <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                                        <div class="space"></div>
                                        <img class="img-responsive center-block" alt="Macbook Pro" src="assets/img/rmbp-sm.png">
                                        <div class="space"></div>
                                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>

                                        <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
                                        <hr class="hr">
                                        <ul class="list-unstyled info-list">
                                            <li><strong>Category: </strong>Websites
                                            </li>
                                            <li><strong>Services in project: </strong>Webdesing, UX, SEO
                                            </li>
                                            <li><strong>Client: </strong>Google Inc.
                                            </li>
                                            <li><strong>Date released: </strong>February 2014</li>
                                        </ul>
                                        <hr class="hr">
                                        <div class="inline-btn">
                                            <a class="btn btn-primary btn-xlg"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                                            <a class="btn btn-primary-trn btn-xlg"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Item 5 -->
                    <li class="col-md-4 col-sm-6 mix web md-trigger" data-modal="modal-5">
                        <div class="hover-content wow easeUp" data-wow-delay="0.35s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="Webdesign">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                        <div class="md-modal" id="modal-5">
                            <div class="md-content">
                                <div class="icon-close md-close"></div>
                                <div class="container">
                                    <div class="body">
                                        <h2 class="title">Some nice title</h2>
                                        <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                                        <div class="space"></div>
                                        <img class="img-responsive center-block" alt="Macbook Pro" src="assets/img/rmbp-sm.png">
                                        <div class="space"></div>
                                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>

                                        <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
                                        <hr class="hr">
                                        <ul class="list-unstyled info-list">
                                            <li><strong>Category: </strong>Websites
                                            </li>
                                            <li><strong>Services in project: </strong>Webdesing, UX, SEO
                                            </li>
                                            <li><strong>Client: </strong>Google Inc.
                                            </li>
                                            <li><strong>Date released: </strong>February 2014</li>
                                        </ul>
                                        <hr class="hr">
                                        <div class="inline-btn">
                                            <a class="btn btn-primary btn-xlg"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                                            <a class="btn btn-primary-trn btn-xlg"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Item 6 -->
                    <li class="col-md-4 col-sm-6 mix apps md-trigger" data-modal="modal-6">
                        <div class="hover-content wow easeUp" data-wow-delay="0.85s">
                            <img src="http://placehold.it/720x540" class="img-responsive" alt="application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                        <div class="md-modal" id="modal-6">
                            <div class="md-content">
                                <div class="icon-close md-close"></div>
                                <div class="container">
                                    <div class="body">
                                        <h2 class="title">Some nice title</h2>
                                        <p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>
                                        <div class="space"></div>
                                        <img class="img-responsive center-block" alt="Macbook Pro" src="assets/img/rmbp-sm.png">
                                        <div class="space"></div>
                                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>

                                        <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
                                        <hr class="hr">
                                        <ul class="list-unstyled info-list">
                                            <li><strong>Category: </strong>Websites
                                            </li>
                                            <li><strong>Services in project: </strong>Webdesing, UX, SEO
                                            </li>
                                            <li><strong>Client: </strong>Google Inc.
                                            </li>
                                            <li><strong>Date released: </strong>February 2014</li>
                                        </ul>
                                        <hr class="hr">
                                        <div class="inline-btn">
                                            <a class="btn btn-primary btn-xlg"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                                            <a class="btn btn-primary-trn btn-xlg"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
                                        </div>
                                    </div>
                                </div>
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

        <!-- jQuery -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

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

