<?php
    include "model/pdo.php";
    include "model/khachsan.php";
    include "model/loaiphong.php";
    include "model/bed.php";

    include "global.php";
    include "view/header.php";

    if(isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];

        switch ($act) {
            case 'about':
                include "view/about.php";
                break;
            case 'luxury_room' :
                include "view/chitiet_phong/luxury.php";
                break;         
        }
        
    }
    else {
        $list_city = getAll_city();
        $list_hotel = getAll_hotel();
        include "view/home.php";
    }
    
    include "view/footer.php";
    
?>