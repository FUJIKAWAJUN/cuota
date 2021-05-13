<?php
require_once(ROOT_PATH .'/Controllers/cuota_Controller.php');

// postがある場合
if(isset($_POST)){

    $good = new cuotaController();
    $article = $good->good($_POST);

}
