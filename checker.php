<?php
    function redirect($url) {
        header("Location:" . $url, true);
        die();
    }
        if(isset($_SESSION['animals'])){
            redirect("./results.php");
        }else {
            redirect("./settings.php");
        }
?>