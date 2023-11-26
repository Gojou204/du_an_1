<!-- Content -->
<main>
    <div class="top_main">
        <div class="title">
            <h1>THÊM MỚI KHÁCH SẠN</h1>
        </div>

        <div class="add">
            <a href="index.php?act=khachsan" style="color: blue; text-decoration: underline;">Quay lại trang danh sách</a>
        </div>
    </div>

    <div class="main_content shadow">
        
    </div>

    <form action="index.php?act=add_khachsan" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" value="" placeholder="Nhập tên khách sạn">
        <br>
        <input type="file" name="img" value="" placeholder="">
        <br>
        <input type="text" name="address" value="" placeholder="Nhập địa chỉ khách sạn">
        <br>
        <textarea name="about" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
        <br>
        <input type="number" name="views" value="" placeholder="Lượt xem">
        <br>
        <select name="city" id="">
            <option value="0" selected>--Chọn thành phố--</option>
            <?php foreach ($list_city as $city) : ?>
                <?php
                    extract($city);
                    echo '<option value="'.$id_city.'">'.$name.'</option>';
                ?>
            <?php endforeach ?>
        </select><br>
        <button name="add">Thêm mới</button>
        <a href="index.php?act=khachsan"><input type="button" value="Quay lại trang danh sách"></a>
    </form>
</main>
<!-- End Content -->
