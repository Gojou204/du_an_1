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
                include "view/booking_phong/list_hotel_by_city.php";
                break;
            break;   
            
            case 'listphong':
                $list_city = getAll_city();
                $hotel = getOne_hotel($_GET['id_hotel']);
                $list_a_room = getRoom_a_Hotel($_GET['id_hotel']);
                $list_bed = getAll_bed();
                include "view/booking_phong/listphong_hotel.php";
                break;  
                
            case 'datphong':
                if(isset($_GET['id_room']) && ($_GET['id_room'])) {
                    $id_room = $_GET['id_room'];

                    $room = getOne_room($_GET['id_room']);
                    $list_bed = getAll_bed();
                }
                include "view/booking_phong/datphong.php";
                break;

            case 'thanhtoan':

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
