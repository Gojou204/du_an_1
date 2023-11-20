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

            case 'xoaks' :
                if(isset($_GET['id_hotel'])){
                    delete_hotel($_GET['id_hotel']);
                }
                $list_hotel = getAll_hotel();
                $list_city = getAll_city(); 
                include "khachsan/khachsan.php";
                break;

            case 'loaiphong' :
                $list_room = getAll_rooms ();
                include "loaiphong/loaiphong.php";
                break;

            case 'add_loaiphong' :

                break;

            case 'xoa_loaiphong':
                break;

            case 'suaks':
                if(isset($_GET['id_hotel'])&&($_GET['id_hotel']>0)){
                    $hotel = getOne_hotel($_GET['id_hotel']);
                }
                $list_city = getAll_city(); 
                $list_hotel = getAll_hotel();
                include "khachsan/update_khachsan.php";
                break;
            case 'updateks':    
                if(isset($_POST['update'])&&($_POST['update'])){
                    
                    // $id_city = $_POST['id_city'];
                    $id_hotel = $_POST['id_hotel'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $about = $_POST['about'];
                    $views = $_POST['views'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['img']['name']);
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                        //echo "Bạn đã upload ảnh thành công";
                    }else{
                        //echo "Upload ảnh không thành công";
                    }
                    update_hotel($id_hotel,$name,$img,$address,$about,$views);
                    $thongbao = "Cập nhật thành công";
                }
                $list_hotel = getAll_hotel();
                $list_city = getAll_city(); 
                include "khachsan/khachsan.php";
                break;
            case 'updatephong':
                include "loaiphong/update_loaiphong.php";
                break;

            // default:
            //     echo "<h1>ĐƯỜNG DẪN KHÔNG XÁC ĐỊNH!</h1>
            //     <a href='index.php' style='color: blue'>Quay lại trang chủ</a>";
            //     break;
        }
    }
    else {
        include "home.php";
    }
    include "footer.php";
?>


        
