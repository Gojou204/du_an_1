<?php
    if(is_array($hotel)){
        extract($hotel);
    }
    $hinh = "../".$img_path.$img;
    if(is_file($hinh)){
        $hinh = "<img src='".$hinh."' width='250px'>";
    }else{
        $hinh = "Lỗi";
    }
?>

<main>

    <h1>Cập nhật khách sạn</h1><br>
    <form action="index.php?act=updateks" method="POST" enctype="multipart/form-data">
        <div>
            <label>Tên khách sạn</label><br>
            <input type="text" name="name" value="<?=$name?>">
        </div>
        <div>
            <label>Hình ảnh</label><br>
            <?php echo $hinh ?><br>
            <input type="file" name="img">          
        </div>
        <div>
            <label>Địa chỉ</label><br>
            <input type="text" name="address" value="<?=$address?>">
        </div>
        <div>
            <label>Mô tả</label><br>
            <textarea name="about" id="" cols="60" rows="5" value=""><?=$about?></textarea>
        </div>
        <div>
            <label>Lượt xem</label><br>
            <input type="number" name="views" value="<?=$views?>">
        </div><br>
        <input type="hidden" name="id_hotel" value="<?=$id_hotel?>">
        <input type="submit" name="update" value="Cập nhật">
        <a href="index.php?act=khachsan"><input type="button" value="Quay lại trang danh sách"></a>
    </form>
</main>
