<?php
require_once(ROOT_PATH .'/Controllers/cuota_Controller.php');

// postがある場合
if(isset($_POST)){

    $keep = new cuotaController();
    $article = $keep->keep($_POST);

}
