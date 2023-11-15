<?php
    include "header.php";
    include "menu.php";

    if(isset($_GET['act']) && ($_GET['act']) != "") {
        $act = $_GET['act'];

        switch ($act) {
            case 'khachsan':
                include "khachsan.php";
                break;

            case 'loaiphong':
                include "loaiphong.php";
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
