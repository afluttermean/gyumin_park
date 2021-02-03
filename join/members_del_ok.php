<meta charset="utf-8">
<?php
session_start();
include "../dbcon/dbcon.php";

$idx = $_SESSION["s_idx"];
$uname = $_SESSION["s_uname"];
$sql = "delete from members where idx=$idx";
$result = mysqli_query($con,$sql);

unset($_SESSION["idx"]);
unset($_SESSION["uname"]);
unset($_SESSION["uid"]);

mysqli_close();

echo "
    <script type='text/javascript'>
        location.href = './members_del_com.php';
    </script>
";



?>