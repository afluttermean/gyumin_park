<meta charset="utf-8">
<?php

session_start();
include "../dbcon/dbcon.php";

$device_no = $_GET["device_no"];

$sql = "delete from device where device_no='$device_no';";

$result = mysqli_query($con, $sql);

mysqli_close();


echo "
    <script type='text/javascript'>
        location.href = './device.php';
    </script>
";



?>