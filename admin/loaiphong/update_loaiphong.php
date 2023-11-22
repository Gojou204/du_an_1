<?php
    if(is_array($room)){
        extract($room);
    }
    $hinh = "../".$img_path.$img;
    if(is_file($hinh)){
        $hinh = "<img src='".$hinh."' width='250px'>";
    }else{
        $hinh = "Lỗi";
    }
?>

<main>
        <h1>Cập nhật loại phòng</h1> <br>
        <form action="index.php?act=updatephong" method="POST" enctype="multipart/form-data">
            <div>
                <label>Tên khách sạn &emsp; </label> 
                <select name="id_hotel" id="">
                    <option value="0">Tất cả</option>
                    <?php
                        foreach ($list_hotel as $hotel){
                            if($id_hotel==$hotel['id_hotel']){
                                echo '<option value ="'.$hotel['id_hotel'].'"selected>'.$hotel['name']. '</option>';
                            }else{
                                echo '<option value ="'.$hotel['id_hotel'].'">'.$hotel['name']. '</option>';
                            }
                        }
                    ?>
                </select>
            </div>
            <div>
                <label>Tên loại phòng:</label><br>
                <input type="text" name="name" value="<?=$name?>">
            </div>
            <div>
                <label>Hình ảnh</label><br>
                <?php echo $hinh ?><br>
                <input type="file" name="img"> 
            </div>
            <div>
                <label>Giá tiền:</label><br>
                <input type="number" name="price" value="<?=$price?>"> &emsp; VNĐ
            </div>
            <div>
                <label>Mô tả</label><br>
                <textarea name="about" id="" cols="60" rows="5" value=""><?=$about?></textarea>
            </div>
            <div>
                <label>Loại giường &emsp; </label>    
                <select name="id_bed" id="">
                    <option value="0" selected>--Chọn loại giường--</option>
                    <?php
                        foreach ($list_bed as $bed){
                            if($id_bed==$bed['id_bed']){
                                echo '<option value ="'.$bed['id_bed'].'"selected>'.$bed['name']. '</option>';
                            }else{
                                echo '<option value ="'.$bed['id_bed'].'">'.$bed['name']. '</option>';
                            }
                        }
                    ?>
                </select>
            </div> <br>
            <!-- <div>
                <label>Tiện ích:</label><br>
                <input type="checkbox" name="" id="" value=""> Wifi free &emsp;
                <input type="checkbox" name="" id="" value=""> Lễ tân 24h &emsp;
                <input type="checkbox" name="" id="" value=""> Vòi tắm đứng &emsp;
            </div><br> -->
            <input type="hidden" name="id_room" value="<?=$id_room?>">
            <input type="submit" name="capnhat_room" value="Cập nhật">
            <a href="index.php?act=listphong"><input type="button" value="Quay lại trang danh sách"></a>
        </form>
    </main>
