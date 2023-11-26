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

            case 'list_hotel' :
                if(isset($_GET['id_city']) && ($_GET['id_city'])) {
                    $id_city = $_GET['id_city'];

                    echo $id_city;
                    getAll_hotel_by_city($id_city);
                }

                $list_hotel = getAll_hotel();
                
                $list_city = getAll_city();
                include "view/khachsan/list.php";
                break;

                case 'list_hotel_by_city' :
                    if(isset($_GET['id_city']) && ($_GET['id_city'])) {
                        $id_city = $_GET['id_city'];
    
                        // echo $id_city;
                        $list_hotel_by_city = getAll_hotel_by_city($id_city);
                    }
    
                    $list_hotel = getAll_hotel();                   
                    $list_city = getAll_city();
                    include "view/khachsan/list_hotel_by_city.php";
                    break;
        }
        
    }
    else {
        include "view/home.php";
    }
    
    include "view/footer.php";
    
?>
