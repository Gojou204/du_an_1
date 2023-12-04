<?php
    include "model/pdo.php";
    include "model/khachsan.php";
    include "model/loaiphong.php";
    include "model/bed.php";

    include "global.php";
    // include "view/header.php";

    if(isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];

        switch ($act) {
            case 'about':
                include "view/header.php";
                include "view/about.php";
                break;
            
            case 'luxury_room' :
                include "view/header.php";
                include "view/chitiet_phong/luxury.php";
                break; 

            case 'list_hotel' :
                include "view/header.php";
                if(isset($_GET['id_city']) && ($_GET['id_city'])) {
                    $id_city = $_GET['id_city'];

                    echo $id_city;
                    getAll_hotel_by_city($id_city);
                }

                $list_hotel = getAll_hotel();
                $list_city = getAll_city();
                include "view/khachsan/list.php";
                break;

            case 'check':
                include "view/header.php";
                include "view/booking_phong/list_hotel_by_city.php";
                break;

            case 'list_hotel_by_city' :
                include "view/header.php";
                if(isset($_GET['id_city']) && ($_GET['id_city'])) {
                    $id_city = $_GET['id_city'];

                    // echo $id_city;
                    $list_hotel_by_city = getAll_hotel_by_city($id_city);
                }

                $list_hotel = getAll_hotel();                   
                $list_city = getAll_city();
                include "view/booking_phong/list_hotel_by_city.php";
                break;
            break;   
            
            case 'listphong':
                include "view/header.php";
                $list_city = getAll_city();
                $hotel = getOne_hotel($_GET['id_hotel']);
                $list_a_room = getRoom_a_Hotel($_GET['id_hotel']);
                $list_bed = getAll_bed();
                include "view/booking_phong/listphong_hotel.php";
                break;  
                
            case 'datphong':
                include "view/header.php";
                if(isset($_GET['id_room']) && ($_GET['id_room'])) {
                    $id_room = $_GET['id_room'];

                    $room = getOne_room($_GET['id_room']);
                    $list_bed = getAll_bed();
                }
                include "view/booking_phong/datphong.php";
                break;

            case 'thanhtoan':
                function execPostRequest($url, $data)
                    {
                        $ch = curl_init($url);
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                'Content-Type: application/json',
                                'Content-Length: ' . strlen($data))
                        );
                        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                        //execute post
                        $result = curl_exec($ch);
                        //close connection
                        curl_close($ch);
                        return $result;
                    }

                    if(isset($_POST['payUrl'])){

                    $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
                    $partnerCode = 'MOMOBKUN20180529';
                    $accessKey = 'klm05TvNBzhg7h7j';
                    $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

                    $orderInfo = "Thanh toán đặt phòng";
                    $amount = "10000";
                    $orderId = rand(00,9999);
                    $redirectUrl = "http://localhost/du_an_1/index.php";
                    $ipnUrl = "http://localhost/du_an_1/index.php";
                    $extraData = "";


                    $partnerCode = $partnerCode;
                    $accessKey = $accessKey;
                    $serectkey = $secretKey;
                    $orderId = $orderId; // Mã đơn hàng
                    $orderInfo = $orderInfo;
                    $amount = $amount;
                    $ipnUrl = $ipnUrl;
                    $redirectUrl = $redirectUrl;
                    $extraData = $extraData;

                    $requestId = time() . "";
                    $requestType = "payWithATM";
                    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                    //before sign HMAC SHA256 signature
                    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                    $signature = hash_hmac("sha256", $rawHash, $serectkey);
                    $data = array('partnerCode' => $partnerCode,
                        'partnerName' => "Test",
                        "storeId" => "MomoTestStore",
                        'requestId' => $requestId,
                        'amount' => $amount,
                        'orderId' => $orderId,
                        'orderInfo' => $orderInfo,
                        'redirectUrl' => $redirectUrl,
                        'ipnUrl' => $ipnUrl,
                        'lang' => 'vi',
                        'extraData' => $extraData,
                        'requestType' => $requestType,
                        'signature' => $signature);
                    $result = execPostRequest($endpoint, json_encode($data));
                    $jsonResult = json_decode($result, true);  // decode json

                    //Just a example, please check more in there

                    header('Location: ' . $jsonResult['payUrl']);                                                                                         
                    }else{
                        echo'Lỗi';
                    }
                break;

        }
        
    }
    else {
        include "view/header.php";
        if(isset($_POST['check'])&&($_POST['check'])==""){
            $keyw=$_POST['keyw'];
            $id_city=$_POST['id_city'];
        }else{
            $keyw="";
            $id_city=0;
        }
        $list_city = getAll_city();
        $list_hotel = getAll_hotel();
        include "view/home.php";
    }
    
    include "view/footer.php";
    
?>
