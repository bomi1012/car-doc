<?php 
    $all = "mix";
    $a = "Autoschprühfolie";
    $f = "Fahrzeuglackierung";
    $k = "Karosserieinstandsetzung";
?>
<span class="breakPoint" id="services_gallery"></span>
<div class="bg-grey section">
    <div class="container">
        <h2 class="lg-title lg-title-border">Dienstleistungen in Bilder</h2>

        <ul class="filter-tabs">
            <li class="filter active" data-filter="<?php echo $all; ?>"><span>Alle</span>
            </li>
            <li class="filter" data-filter="<?php echo $f; ?>"><span><?php echo $f; ?></span>
            </li>
            <li class="filter" data-filter="<?php echo $a; ?>"><span><?php echo $a; ?></span>
            </li>
            <li class="filter" data-filter="<?php echo $k; ?>"><span><?php echo $k; ?></span>
            </li>
        </ul>
        <div class="md-overlay"></div>
        <ul class="row" id="Grid">
            <!-- Item 1 -->
            <li class="col-md-4 col-sm-6 <?php echo $all . " " .  $f; ?>">
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
            <li class="col-md-4 col-sm-6 <?php echo $all . " " .  $f . " " . $a ?>">
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
            <li class="col-md-4 col-sm-6 <?php echo $all . " " .  $k . " " . $a ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">
                    <img src="custom/image/bilder/20140628_085445.jpg" class="img-responsive" 
                         alt="Auto">
                    <div class="top-part hidden-xs">
                        <a href="custom/image/bilder/20140628_085445.jpg" 
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

            <!-- Item 4 -->
          <li class="col-md-4 col-sm-6 <?php echo $all . " " .  $f . " " . $k ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">
                    <img src="custom/image/bilder/20140723_181552.jpg" class="img-responsive" 
                         alt="Auto">
                    <div class="top-part hidden-xs">
                        <a href="custom/image/bilder/20140723_181552.jpg" 
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