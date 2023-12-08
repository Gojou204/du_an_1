<?php
    // Lấy tất cả các khách sạn
    function getAll_hotel() {
        $sql = "SELECT * FROM `hotel` WHERE trangthai = 0";
        $listkhachsan = pdo_query($sql);
        return $listkhachsan;
    }

    // Lấy tất cả các khách sạn
    function getAll_hotel_view() {
        $sql = "SELECT * FROM `hotel` WHERE trangthai = 0 ORDER BY `views` DESC LIMIT 0, 3";
        $listkhachsan = pdo_query($sql);
        return $listkhachsan;
    }

    // Lấy tất cả các khách sạn theo id thành phố
    function getAll_hotel_by_city($id_city) {
        $sql = "SELECT * FROM `hotel` WHERE `id_city` = $id_city";
        $listkhachsan = pdo_query($sql);
        return $listkhachsan;
    }

    // Lấy tất cả các khách sạn theo id thành phố được sắp xếp theo lượt xem từ cao -> thấp
    function getAll_hotel_by_city_view($id_city) {
        $sql = "SELECT * FROM `hotel` WHERE `id_city` = $id_city ORDER BY `views` DESC";
        $listkhachsan = pdo_query($sql);
        return $listkhachsan;
    }

    // Lấy 1 khách sạn
    function getOne_hotel($id_hotel) {
        $sql = "SELECT * FROM `hotel` WHERE id_hotel = '$id_hotel'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Thêm 1 bản ghi khách sạn
    function add_hotel($name, $img, $address, $about, $views, $id_city) {
        $sql = "INSERT INTO `hotel` (`name`, `img`, `address`, `about`, `views`, `id_city`) 
        VALUES ('$name', '$img', '$address', '$about', '$views', '$id_city');";
        pdo_execute($sql);
    }

    // Lấy tất cả các thành phố
    function getAll_city() {
        $sql = "SELECT * FROM `city`";
        $listcity = pdo_query($sql);
        return $listcity;
    }

    // Lấy tất cả các thành phố theo lượt xem
    function getAll_city_view() {
        $sql = "SELECT * FROM `city` ORDER BY `views` DESC";
        $listcity = pdo_query($sql);
        return $listcity;
    }

    // Update khách sạn
    function update_hotel($id_hotel,$name,$img,$address,$about,$views) {
        if($img!=""){
            $sql = "UPDATE `hotel` SET `name`='{$name}', `img`='{$img}', `address`='{$address}', `about`='{$about}', `views`='{$views}', `id_hotel`='{$id_hotel}' WHERE `hotel`.`id_hotel`=$id_hotel";
        }else{
            $sql = "UPDATE `hotel` SET `name`='{$name}', `img`='{$img}', `address`='{$address}', `about`='{$about}', `views`='{$views}', `id_hotel`='{$id_hotel}' WHERE `hotel`.`id_hotel`=$id_hotel";
        }
        pdo_execute($sql);
    }

    // Xóa khách sạn (Đưa vào thùng rác)
    function delete_hotel($id_hotel) {
        $sql = "UPDATE `hotel` SET `trangthai` = 1 WHERE `hotel`.`id_hotel` = $id_hotel";
        pdo_execute($sql);
    }
?>
