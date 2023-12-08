<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme  -->
<link rel="stylesheet" href="template-login/css/style.css">
   <!-- font-awesome icons -->
<link href="template-login/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="template-login//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  </head>
  <body>
<div class="login-form w3_form">
  <!--  Title-->
      <div class="login-title w3_title">
           <h1>Hostily</h1>
      </div>
      
           <div class="login w3_login">
                <h2 class="login-header w3_header">Đăng nhập</h2>
				    <div class="w3l_grid">
                        <form class="login-container" action="index.php?act=dangnhap" method="POST">
                         
                         <?php if(isset($loginMess)&&$loginMess != ''){
                              echo $loginMess;
                         } ?>
                             <input type="text" placeholder="User" Name="user" required="" >
                             <input type="password" placeholder="Password" Name="pass" required="">
                             <input type="submit" value="Đăng nhập" name="dangnhap">
                        </form>
<br>
                 
<div class="bottom-text w3_bottom_text">
      <p>Chưa có tài khoản?<a href="index.php?act=dangky">Đăng ký</a></p>
      <h4> <a href="index.php?act=quenmk">Quên mật khẩu</a></h4>
</div>

                  </div>
       </div>
  
</div>
  
</body>
</html>
