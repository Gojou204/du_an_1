<?php
    include "view/header.php";

    if(isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];

        switch ($act) {
            case 'luxury_room' :
                include "view/chitiet_phong/luxury.php";
                break;
        }
        
    }
    else {
        include "view/home.php";
    }
    
    include "view/footer.php";
    
?>