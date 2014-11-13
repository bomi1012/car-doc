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

<!--            <li class="col-md-4 col-sm-6 <?php echo $all . " " . $f; ?>">
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
</li>-->

            <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/IMG_5796.jpeg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/IMG_5796.jpeg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
            <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/IMG_5805.jpeg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/IMG_5805.jpeg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
            <li class="col-md-4 <?php echo $all . " " . $k; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140825_150038.jpg" 
                       title="<?php echo $k; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140825_150038.jpg" class="img-responsive" alt="<?php echo $k; ?>">
                    </a>
                </div>
            </li>
            <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140628_085445.jpg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140628_085445.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
            
              <li class="col-md-4 <?php echo $all . " " . $k; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140703_184522.jpg" 
                       title="<?php echo $k; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140703_184522.jpg" class="img-responsive" alt="<?php echo $k; ?>">
                    </a>
                </div>
            </li>

            <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/IMG_5875.JPG" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/IMG_5875.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
                        <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/IMG_5876.JPG" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/IMG_5876.JPG" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
                        <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140723_181552.jpg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140723_181552.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>

               <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140628_192550.jpg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140628_192550.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
               <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140603_193446.jpg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140603_193446.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
               <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140613_180947.jpg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140613_180947.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
               <li class="col-md-4 <?php echo $all . " " . $f; ?>">
                <div class="hover-content wow easeUp" data-wow-delay="0.25s">                   
                    <a href="custom/image/bilder/20140604_082912.jpg" 
                       title="<?php echo $f; ?>" 
                       class="fancybox" 
                       rel="group">
                        <img src="custom/image/bilder/20140604_082912.jpg" class="img-responsive" alt="<?php echo $f; ?>">
                    </a>
                </div>
            </li>
            
        </ul>
    </div>
</div>