<?php

session_start();


include "../../dbcon/dbcon.php";

$idx = $_GET["idx"];

$sql = "delete from members where idx=$idx;";


$result = mysqli_query($con, $sql);


mysqli_close();

echo "
    <script type='text/javascript'>
        location.href = './list.php';
    </script>
";


?>