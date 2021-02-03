<?php 
session_start();

include "../../dbcon/dbcon.php";

$uid = $_POST["uId"];
$pwd = $_POST["pwd"];

$sql = "select idx, uname, uid, pwd from members where uid='$uid';";

$result = mysqli_query($con,$sql);

$array = mysqli_fetch_array($result);

$g_idx = $array["idx"];
$g_uname = $array["uname"];
$g_uid = $array["uid"];
$g_pwd = $array["pwd"];


if( $uid != $g_uid ) {
    echo "
        <script>
            alert(\"일치하는 아이디가 없습니다.\");
            history.back();
        </script>
    ";
} else{
    if( $pwd != $g_pwd ) {
        echo "
            <script>
                alert(\"비밀번호가 일치하지 않습니다.\");
                history.back();
            </script>
        ";
    } else{
        
        $_SESSION["s_idx"] = $g_idx;
        $_SESSION["s_uname"] = $g_uname;
        $_SESSION["s_uid"] = $g_uid;
        
        echo "
            <script>
                location.href='../admin_index.php';
            </script>
        ";
    };
};




?>