<?php
    // Lấy tất cả các khách sạn
    function getAll_hotel() {
        $conn = connectdb();
        $sql = "SELECT * FROM `hotel` WHERE trangthai = 0";
        $stmt = $conn->prepare($sql);
        
        // Hàm thực thi câu lệnh SQL
        $stmt->execute();

        // Dữ liệu trả về dạng mảng
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Lấy 1 khách sạn
    function getOne_hotel($id_hotel) {
        $conn = connectdb();
        $sql = "SELECT * FROM `hotel` WHERE id_hotel = '$id_hotel'";
        $stmt = $conn->prepare($sql);
        
        // Hàm thực thi câu lệnh SQL
        $stmt->execute();

        // Dữ liệu trả về dạng mảng
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Thêm 1 bản ghi khách sạn
    function add_hotel() {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $about = $_POST['about'];
        $views = $_POST['views'];
        $id_city = $_POST['id_city'];

        $img = $_FILES['tmp_name'];
        $conn = connectdb();
        $sql = "INSERT INTO `hotel` (`name`, `img`, `address`, `about`, `views`, `id_city`)
        VALUES ('$name', '$img', '$address', '$about', '$views', '$id_city');";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    // Lấy tất cả các thành phố
    function getAll_city() {
        $conn = connectdb();
        $sql = "SELECT * FROM `city`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Lấy tất cả các phòng của 1 khách sạn
    function getAll_a_Hotel() {
        $conn = connectdb();
        $sql = "SELECT * FROM `categories_room` WHERE `id_hotel` = 3";
        $stmt = $conn->prepare($sql);
        
        // Hàm thực thi câu lệnh SQL
        $stmt->execute();

        // Dữ liệu trả về dạng mảng
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // function delete_hotel($id) {
    //     $conn = connectdb();
    //     $sql = "DELETE FROM `hotel` WHERE `id_hotel` = $id";
    //     $stmt = $conn->prepare($sql);
    //     $stmt -> execute();
    // }

    // Update khách sạn
    function update_hotel($id_hotel,$name,$img,$address,$about,$views) {
        $conn = connectdb();
        if($img!=""){
            $sql = "UPDATE `hotel` SET `name`='{$name}', `img`='{$img}', `address`='{$address}', `about`='{$about}', `views`='{$views}', `id_hotel`='{$id_hotel}' WHERE `hotel`.`id_hotel`=$id_hotel";
        }else{
            $sql = "UPDATE `hotel` SET `name`='{$name}', `img`='{$img}', `address`='{$address}', `about`='{$about}', `views`='{$views}', `id_hotel`='{$id_hotel}' WHERE `hotel`.`id_hotel`=$id_hotel";
        }
        $stmt = $conn->prepare($sql);
        
        // Hàm thực thi câu lệnh SQL
        $stmt->execute();
    }

    // Xóa khách sạn
    function delete_hotel($id_hotel) {
        $conn = connectdb();
        $sql = "UPDATE `hotel` SET `trangthai` = 1 WHERE `hotel`.`id_hotel` = $id_hotel";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>