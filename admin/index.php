<?php
    include "header.php";
    if(isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];

        switch ($act) {
            case 'khachsan' :
                include "khachsan.php";
                break;
            case 'loaiphong' :
                include "loaiphong.php";
                break;
        }
        
    }
    else {
        include "home.php";
    }
   
?>