<meta charset="utf-8">
<?php

session_start();
$uid = $_SESSION["s_uid"];

include "../dbcon/dbcon.php";

$device_name = $_POST["device_na"];
$device_no = $_POST["device_num"];
$payment_date = $_POST["payment_date"];
$payment_location = $_POST["payment_location"];

$find = "select device_no from device where device_no='$device_no';";
$find_result = mysqli_query($con,$find);
$num = mysqli_num_rows($find_result);


if($num){
      echo "
        <script type='text/javascript'>
            alert('이미 등록된 디바이스 정보입니다.');
            history.back();
        </script>
      ";
    } else if(!$num){
        
            $sql = "insert into device
            (uid, device_name, device_no, update_date, payment_location)
            values ('$uid','$device_name','$device_no','$payment_date','$payment_location');
            ";
            $result = mysqli_query($con,$sql);
            mysqli_close($con);

            echo "
            <script type='text/javascript'>
                alert('등록이 완료되었습니다.');
                location.href = './device.php';
            </script>
            ";
        };

?>