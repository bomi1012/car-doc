<?php
//$this->getTitle();
?>
<div class="section p-no-top">
    <div class="container">
        <div id="select_menu">
            <ul class="lg-tabs lg-tabs-3-mb">
                <li class="active">
                    <a href="#profile_home" data-toggle="tab" data-wow-delay="0.1s">
                        <i class="fa fa-home"></i>
                        <h3>Über uns</h3>
                    </a>
                </li>
                <li class="">
                    <a href="#profile_hours" data-toggle="tab" data-wow-delay="0.2s">
                        <i class="fa fa-calendar"></i>
                        <h3>Öffnungszeiten</h3>
                    </a>
                </li>
                <li class="">
                    <a href="#profile_contacts" data-toggle="tab" data-wow-delay="0.3s">
                        <i class="fa fa-book"></i>
                        <h3>Kontakte</h3>
                    </a>
                </li>
<!--                <li class="">
                    <a href="#profile_skills" data-toggle="tab" data-wow-delay="0.4s">
                        <i class="fa fa-lightbulb-o"></i>
                        <h3>Unsere Kompetenzen</h3>
                    </a>
                </li>-->
            </ul>
        </div>

        <div class="space-lg"></div>
        <div class="tab-content lg-tab-content">
            <div class="tab-pane active in" id="profile_home">
                <div class="row">
                    <div class="col-md-7 fadeIn font_mb">
                        <p>Wir sind ein Lack- und Aufbereitungsbetrieb!</p>
                        <p>Schon an unserem letzten Standort in Landau als „L&L United GmbH“ konnten wir unsere Kunden mit unserer Qualität für professionelle Autoaufbereitung, Pflege und Smart-Repair für uns begeistern und zufrieden stellen.</p>
                        <p>Durch den stetig wachsenden Kundenkreis und dem daraus entstehenden Platzmangel, dürfen wir mit Freude verkünden, dass wir seit dem 01.04.2014 in der Großen Ahlmühle 11, 76865 Rohrbach zu finden sind. Nicht nur unser Standort hat sich geändert sondern auch unsere Firmierung, ab sofort sind wir die Car-Doc GmbH.</p>
                        <p>Jetzt, mit unserem noch größeren und schöneren Standort in Rohrbach, sowie durch die Anschaffung einer großen Lackierkabine sind wir jetzt in der Lage LKW und Reisebusse zu lackieren.</p>
                        <p>Seit 8 Jahren schätzt uns Mercedes-Benz als zuverlässiger Partner in der Aufbereitung und mit unseren zahlreichen Waschanlagen und Aufbereitungsplätze in den Mercedes Niederlassungen Mannheim, Heidelberg, Landau und Wörth, sind wir für jede Herausforderung bereit!</p>
                        <p>Für unsere Arbeiten im Bereich Lack, Aufbereitung und Pflege verwenden wir nur Markenprodukte in höchster Qualität, denn nichts ist uns lieber wie ein zufriedener Kunde.</p>
                        <p>Überzeugen Sie sich doch einmal selbst von unseren Leistungen zu fairen Preisen!"</p>

                    </div>
                    <div class="col-md-5 fadeIn wow animated" style="visibility: visible;">
                        <img class="img-mw450" src="custom/image/about_us/car-doc-logo.png" alt="Car-Doc | Logo | Lackservice">
                    </div>
                </div>
            </div>
            <div class="tab-pane in" id="profile_hours">
                <div class="row">  
                    <div class="col-md-8 font_mb">
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
                            <br>Rufen Sie Rund um die Uhr unseren Kundenservice an oder mailen Sie uns 
                        </div>
                        <div class="space-sm"></div>
                        <div style="width: 100px; float: left ">
                            <span class="text-primary"> Telefon:</span> 
                        </div>
                        <div> <?php echo IConstants::CONTACT_TELEPHON; ?> </div>

                        <div class="space-sm"></div>
                        <div style="width: 100px; float: left ">
                            <span class="text-primary"> E-Mail:</span> 
                        </div>
                        <div> <?php echo IConstants::CONTACT_EMAIL; ?> </div>
                    </div>
                    <div class="col-md-4">
                        <img class="img-mw350" src="custom/image/about_us/car-doc-hause.jpeg" alt="Car-Doc | Hause | Lackservice">
                    </div>
                </div>
            </div>
            <div class="tab-pane  in" id="profile_contacts">
                <div class="row">

                    <div class="col-md-8 font_mb">


                        <h2 class="big-title text-primary">Kundenservice</h2>    
                        <div style="width: 30px; float: left ">
                            <span class="text-primary"> <i class="fa fa-map-marker"></i></span> 
                        </div>
                        <div> <?php echo IConstants::CONTACT_ADDRESS; ?>  </div>

                        <div class="space-sm"></div>

                        <div style="width: 30px; float: left ">
                            <span class="text-primary"> <i class="fa fa-phone-square"></i></span> 
                        </div>
                        <div> <?php echo IConstants::CONTACT_TELEPHON; ?>  </div>

                        <div class="space-sm"></div>

                        <div style="width: 30px; float: left ">
                            <span class="text-primary"> <i class="fa fa-envelope-square"></i></span> 
                        </div>
                        <div> <?php echo IConstants::CONTACT_EMAIL; ?>  </div>

                        <div class="space-sm-60"></div>  

                        <div style="float: left ">
                            <span class="text-primary">Wir sind für Sie jeden Tag 24 Stunden erreichtbar!</span> 
                        </div>

                    </div>
                    <div class="col-md-4">
                        <img class="img-mw350" src="custom/image/about_us/car-doc-office.jpeg" alt="Car-Doc | Büro | Lackservice">
                    </div>

                </div>
            </div>
            <div class="tab-pane  in" id="profile_skills">
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
                                <i class="fa fa-play"></i>Qualität &amp; Umwelt</li>
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
