<?php
if (isset($_POST["submit_mail"])) {
    include_once 'src/php/mailer.php';
}
?>

<div class="section auto-height">
    <div class="container">
        <h2 class="lg-title lg-title-border">Kontakte</h2>
        <div class="row">
            <div class="col-md-6 col-sm-7">

                <!-- Contact Form -->
                <div id="form-messages"></div>

                <form accept-charset="utf-8" class="form-horizontal" action='#contacts' role="form" method="post">
                    <div class="form-group icon">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9 ">
                            <div class="control">
                                <input type="text" class="form-control" id="name" placeholder="Max Mustermann" name="name" required>
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group icon">
                        <label for="email" class="col-sm-3 control-label">E-mail</label>
                        <div class="col-sm-9 ">
                            <div class="control">
                                <input type="email" class="form-control" id="email" placeholder="name@email.de" name="email" required>
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group icon">
                        <label for="Message" class="col-sm-3 control-label">Nachricht</label>
                        <div class="col-sm-9 ">
                            <div class="control">
                                <textarea class="form-control" rows="8" id="Message" placeholder="Nachricht" name="message" required></textarea>
                                <i class="fa fa-comment"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group icon">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="submit_mail" class="btn btn-primary">
                                <i class="fa fa-paper-plane-o"></i>Send Message</button>
                        </div>
                    </div>
                </form>

                <div class="space visible-xs"></div>
            </div>

            <div class="col-md-6 col-sm-5" style="top: -20px;">
                <ul class="list-unstyled info-bar">
                    <li>
                        <h3 class="text-primary">Zusätzliche Informationen</h3>
                        <p>Falls Sie noch weitere Fragen haben oder einen Termin festlegen möchten, stehen wir Ihnen gerne durch dieses Formular zur Verfügung! </p>
                    </li>
                    <li>
                        <h3 class="text-primary">Adresse</h3>
                        <p><?php echo IConstants::CONTACT_ADDRESS ?></p>
                    </li>
                    <li>
                        <h3 class="text-primary">Öffnungszeiten</h3>
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