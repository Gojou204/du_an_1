<?php
    include "../model/pdo.php";
    include "../model/khachsan.php";
    include "../model/loaiphong.php";

    include "../global.php";

    include "header.php";
    include "menu.php";
 
    // connectdb();
    // delete_hotel();
    

    if(isset($_GET['act']) && ($_GET['act']) != "") {
        $act = $_GET['act'];

        switch ($act) {
            case 'khachsan' :
                $list_hotel = getAll_hotel();
                include "khachsan/khachsan.php";
                break;

            case 'add_khachsan' :
                $list_city = getAll_city();    
                include "khachsan/add_khachsan.php";          
                break;

            case 'xoa_khachsan' :
                if(isset($_GET['id_hotel']) && $_GET['id_hotel'] > 0) {
                    $id = $_GET['id_hotel'];
                    delete_hotel($id);

                }
                break;

            case 'loaiphong' :
                $list_room = getAll_rooms ();
                include "loaiphong/loaiphong.php";
                break;

            case 'add_loaiphong' :

                break;

            case 'xoa_loaiphong':
                break;

            case 'updateks':
                include "dskhachsan/update_ks.php";
                break;
            case 'updatephong':
                include "dsloaiphong/update_phong.php";
                break;

            default:
                echo "<h1>ĐƯỜNG DẪN KHÔNG XÁC ĐỊNH!</h1>
                <a href='index.php' style='color: blue'>Quay lại trang chủ</a>";
                break;
        }
    }
    else {
        include "home.php";
    }
    include "footer.php";
?>


        
