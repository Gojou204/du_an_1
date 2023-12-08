<?php
    session_start();
    function loadall_taikhoan(){
        $sql = "SELECT * FROM `taikhoan` order by id_taikhoan desc ";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function insert_taikhoan($email, $user, $pass){
        $sql = "INSERT INTO `taikhoan` (`user`, `pass`, `email`) VALUES ('$user', '$pass', '$email')";
        pdo_execute($sql);
    }

    function getOne_taikhoan($user) {
        $sql = "SELECT * FROM `taikhoan` WHERE user = '$user'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Thêm 1 bản ghi tài khoản
    function add_taikhoan($user, $pass, $full_name, $email, $dia_chi, $sdt, $cccd) {
        $sql = "INSERT INTO `taikhoan` (`user`, `pass`, `full_name`, `email`, `dia_chi`, `sdt`, `cccd`) 
        VALUES ('$user', '$pass', '$full_name', '$email', '$dia_chi', '$sdt', 'cccd');";
        pdo_execute($sql);
    }

    function dangnhap($user, $pass){
        $sql = "SELECT * FROM `taikhoan` WHERE user = '$user' and pass = '$pass'";
        $taikhoan = pdo_query_one($sql);

        if($taikhoan != false){
            $_SESSION['user']= $user;
            header("Location: index.php");
            if($_SESSION['user'] == 'admin'){
                header("Location: http://localhost/du_an_1/admin/index.php");
            }
        }
        else{
           return '<p style="color: red">Thông tin tài khoản sai</p>';
        }
    }

    function dangxuat(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
    }

    function sendMail($email){
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $taikhoan = pdo_query_one($sql);

        if($taikhoan != false){
            sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
            return "gửi email thành công";
        }else{
            return "email bạn nhập không có trong hệ thống";
        }
    }

    function sendMailPass($email, $username, $pass){
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '2bb873aa2b716b';                     //SMTP username
            $mail->Password   = 'c5cc7cf8c51e4d';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('duanmau@example.com', 'DuAnMau');
            $mail->addAddress($email, $username);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nguoi dung quen mat khau';
            $mail->Body    = 'Mat khau cua ban la: ' .$pass;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
?>