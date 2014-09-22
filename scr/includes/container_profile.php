<?php
/**
 * benutze: $app = new Application();
 * benutze: $bean = $app->getBean(); 
 */
?>

<!-- Nav Tabs -->
<div>
   <?php echo $bean->profileNavTabs(); ?>
</div>

<!-- Tab panes -->
<div class="space-lg"></div>
<div class="tab-content lg-tab-content">
    <?php echo $bean->profileLoadContent(); ?>
</div>   