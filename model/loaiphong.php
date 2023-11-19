<?php
    function getAll_rooms () {
        $conn = connectdb();
        $sql = "SELECT c.*, h.name AS hotel_name, b.name AS bed_name FROM categories_room c 
        JOIN hotel h ON c.id_hotel = h.id_hotel
        JOIN bed b ON c.id_bed = b.id_bed";
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();

        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>