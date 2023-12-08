<?php
    include "../model/pdo.php";
    include "../model/khachsan.php";
    include "../model/loaiphong.php";
    include "../model/taikhoan.php";
    include "../model/bed.php";

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
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $about = $_POST['about'];
                    $views = $_POST['views'];
                    $id_city = $_POST['city'];

                    $img = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    // echo $name;

                    add_hotel($name, $img, $address, $about, $views, $id_city);
                }
                $list_city = getAll_city();
                include "khachsan/add_khachsan.php";          
                break;

            case 'suaks': // Lấy thông tin khách sạn cũ vào form update
                if(isset($_GET['id_hotel'])&&($_GET['id_hotel']>0)){
                    $hotel = getOne_hotel($_GET['id_hotel']);
                }
                $list_city = getAll_city(); 
                $list_hotel = getAll_hotel();
                include "khachsan/update_khachsan.php";
                break;

            case 'updateks':  // Cập nhật thông tin khách sạn   
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

            case 'xoaks' : // Xóa khách sạn 
                if(isset($_GET['id_hotel'])){
                    delete_hotel($_GET['id_hotel']);
                }
                $list_hotel = getAll_hotel();
                $list_city = getAll_city(); 
                include "khachsan/khachsan.php";
                break;

            case 'listphong':
                $list_room = getAll_rooms ();
                include "loaiphong/listphong.php";
                break;

            case 'loaiphong' :
                if(isset($_GET['id_hotel'])&&($_GET['id_hotel']>0)){
                    $list_a_room = getRoom_a_Hotel($_GET['id_hotel']);
                }
                include "loaiphong/loaiphong.php";
                break;

            case 'add_loaiphong' :
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $hotel = $_POST['hotel'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $about = $_POST['about'];
                    $bed = $_POST['bed'];
                    
                    echo $name;

                    $img = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    echo $name;

                    add_room($hotel, $name, $img, $price, $about, $bed);
                }
                $list_hotel = getAll_hotel();
                $list_bed = getAll_bed();
                include "loaiphong/add_loaiphong.php";
                break;

            case 'chitietphong':
                
                break;
            case 'suaphong': // Lấy thông tin phòng 
                if(isset($_GET['id_room'])&&($_GET['id_room']>0)){
                    $room = getOne_room($_GET['id_room']);
                }
                $list_hotel = getAll_hotel();
                $list_room = getAll_rooms ();
                $list_bed = getAll_bed();
                include "loaiphong/update_loaiphong.php";
                break;

            case 'updatephong': // Update thông tin mới
                if(isset($_POST['capnhat_room'])&&($_POST['capnhat_room'])){   
                    // $id_city = $_POST['id_city'];
                    $id_hotel = $_POST['id_hotel'];
                    $id_room = $_POST['id_room'];
                    $id_bed = $_POST['id_bed'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $about = $_POST['about'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['img']['name']);
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                        //echo "Bạn đã upload ảnh thành công";
                    }else{
                        //echo "Upload ảnh không thành công";
                    }
                    update_loaiphong($id_hotel, $id_room, $id_bed, $name, $img, $price, $about);
                    $thongbao = "Cập nhật thành công";
                }
                $list_hotel = getAll_hotel();
                $list_room = getAll_rooms ();
                $list_bed = getAll_bed();
                include "loaiphong/listphong.php";
                break;

            case 'xoa_loaiphong':
                if(isset($_GET['id_room'])){
                    delete_room($_GET['id_room']);
                }
                $list_hotel = getAll_hotel();
                $list_room = getAll_rooms ();
                $list_bed = getAll_bed();
                include "loaiphong/listphong.php";
                break;
                
            case 'taikhoan' :
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/listtaikhoan.php";
                break;
            case 'add_taikhoan' :
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $sdt = $_POST['sdt'];
                    $cccd = $_POST['cccd'];
                    

                    add_taikhoan($user, $pass, $full_name, $email, $dia_chi, $sdt, $cccd);
                    include "taikhoan/listtaikhoan.php"; 
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/add_taikhoan.php";          
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


        
