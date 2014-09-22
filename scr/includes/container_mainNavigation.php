<?php
/**
 * benutze: $app = new Application();
 */
?>

<div class="navbar-contact">
    <?php echo $app->navbarContact(); ?>
</div>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <span class="navbar-brand navbar-brand-mb">
        <span class="text-primary"><?php echo IConstants::APPLICATION_NAME; ?></span>
    </span>
</div>

<div class="collapse navbar-collapse " id="bs-navbar-collapse-1">
    <?php echo $app->navbarMenu(); ?>
</div>
<div class="full">
    <div>
        <span class="navbar-brand-left-mb">
            <span class="text-primary"></span><?php echo IConstants::APPLICATION_NAME_SLOGAN; ?>
        </span>
    </div>
</div>
