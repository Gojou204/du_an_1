<?php
    function getAll_rooms () {
        $sql = "SELECT c.*, h.name AS hotel_name, b.name AS bed_name FROM categories_room c 
        JOIN hotel h ON c.id_hotel = h.id_hotel
        JOIN bed b ON c.id_bed = b.id_bed 
        WHERE c.trangthai = 0";
        $listphong = pdo_query($sql);
        return $listphong;
    }

    // Thêm phòng ksan
    function add_room($hotel, $name, $img, $price, $about, $bed) {
        $sql = "INSERT INTO `categories_room` (`id_hotel`, `name`, `img`, `price`, `about`, `id_bed`) 
        VALUES ('$hotel', '$name', '$img', '$price', '$about', '$bed');";
        pdo_execute($sql);
    }

    // Lấy tất cả các phòng của 1 khách sạn
    function getRoom_a_Hotel($id_hotel) {
        // $sql = "SELECT * FROM `categories_room` WHERE `id_hotel` = 3";
        $sql = "SELECT c.*, h.name AS hotel_name, b.name AS bed_name FROM categories_room c 
        JOIN `hotel` h ON c.id_hotel = h.id_hotel
        JOIN `bed` b ON c.id_bed = b.id_bed
        WHERE c.id_hotel = $id_hotel";
        
        $result = pdo_query($sql);
        return $result;
    }

    // Lấy thông tin 1 phòng của 1 khách sạn
    function getOne_room($id_room){
        $sql = "SELECT * FROM `categories_room` WHERE `id_room` = '$id_room'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_loaiphong($id_hotel, $id_room, $id_bed, $name, $img, $price, $about){
        if($img!=""){
            $sql = "UPDATE `categories_room` SET `id_hotel`='{$id_hotel}', `name`='{$name}', `img`='{$img}', `price`='{$price}', `about`='{$about}', `id_room`='{$id_room}', `id_bed`='{$id_bed}' WHERE `categories_room`.`id_room`=$id_room";
        }else{
            $sql = "UPDATE `categories_room` SET `id_hotel`='{$id_hotel}', `name`='{$name}', `img`='{$img}', `price`='{$price}', `about`='{$about}', `id_room`='{$id_room}', `id_bed`='{$id_bed}' WHERE `categories_room`.`id_room`=$id_room";
        }
        pdo_execute($sql);
    }

    // Xóa phòng (Đưa vào thùng rác)
    function delete_room($id_room) {
        $sql = "UPDATE `categories_room` SET `trangthai` = 1 WHERE `categories_room`.`id_room` = $id_room";
        pdo_execute($sql);
    }
?>
