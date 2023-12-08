<!-- Content -->
<main>
    <div class="top_main">
        <div class="title">
            <h1>THÊM TÀI KHOẢN MỚI</h1>
        </div>

        <div class="add">
            <a href="index.php?act=taikhoan" style="color: blue; text-decoration: underline;">Quay lại trang danh sách</a>
        </div>
    </div>

    <div class="main_content shadow">
        
    </div>

    <form action="index.php?act=add_taikhoan" method="POST" enctype="multipart/form-data">
        <input type="text" name="user" value="" placeholder="Username">
        <br><br>
        <input type="text" name="pass" value="" placeholder="Password">
        <br><br>
        <input type="text" name="full_name" value="" placeholder="Họ và tên">
        <br><br>
        <input type="email" name="email" value="" placeholder="Email">
        <br><br>
        <input type="text" name="dia_chi" value="" placeholder="Địa chỉ">
        <br><br>
        <input type="number" name="sdt" value="" placeholder="Sđt">
        <br><br>
        <input type="number" name="cccd" value="" placeholder="Căn cước công dân">
        <br><br>
        <button name="add">Thêm mới</button>
        <a href="index.php?act=taikhoan"><input type="button" value="Quay lại trang danh sách"></a>
    </form>
</main>
<!-- End Content -->
