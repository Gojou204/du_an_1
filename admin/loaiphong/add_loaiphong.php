<!-- Content -->
<main>
    <div class="top_main">
        <div class="title">
            <h1>THÊM MỚI LOẠI PHÒNG</h1>
        </div>

        <div class="add">
            <a href="index.php?act=listphong" style="color: blue; text-decoration: underline;">Quay lại trang danh sách</a>
        </div>
    </div>

    <div class="main_content shadow">
        
    </div>

    <form action="index.php?act=add_loaiphong" method="POST" enctype="multipart/form-data">
        <select name="hotel" id="">
            <option value="0" selected>--Chọn khách sạn--</option>
                <?php foreach ($list_hotel as $hotel) : ?>
                    <?php
                        extract($hotel);
                        echo '<option value="'.$id_hotel.'">'.$name.'</option>';
                    ?>
                <?php endforeach ?>
        </select>
        <br>
        <input type="text" name="name" value="" placeholder="Nhập tên loại phòng">
        <br>
        <input type="file" name="img" value="" placeholder="">
        <br>
        <input type="number" name="price" value="" placeholder="Nhập giá phòng">
        <br>
        <textarea name="about" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
        <br>
        <select name="bed" id="">
            <option value="0" selected>--Chọn loại giường--</option>
                <?php foreach ($list_bed as $bed) : ?>
                    <?php
                        extract($bed);
                        echo '<option value="'.$id_bed.'">'.$name.'</option>';
                    ?>
                <?php endforeach ?>
        </select>
        <br>
        <button name="add">Thêm mới</button>
    </form>
</main>
<!-- End Content -->
