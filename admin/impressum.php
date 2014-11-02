<?php 
$page = "impressum";
require_once '../scr/classes/db/DBConnection.php';
require_once '../scr/classes/db/DBService.php';
$db = new DBService();

if (isset($_POST["save_button"])) {    
    $db->updateContent($_POST["impressum"], $db->findContentIdByPageName($page));    
}

$content = $db->findContent($page, NULL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>       
        <script src="../ckeditor/ckeditor.js"></script>
    </head>
    <body>  
        <form class="form-horizontal" action='' method="POST" accept-charset="utf-8">
            <textarea name="impressum" id="impressum" rows="10" cols="80">
                <?php echo $content['content'];  ?>
            </textarea>
            <script>
                CKEDITOR.replace('impressum');
            </script>
            <input type="submit" value="Speichern" name="save_button" />
        </form>       
    </body>
</html>


