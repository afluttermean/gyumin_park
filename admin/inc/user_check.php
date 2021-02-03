<meta charset="utf-8">
<?php

session_start();
$s_uid = isset($_SESSION["s_uid"])? $_SESSION["s_uid"]:"";
$s_uname = isset($_SESSION["s_uname"])? $_SESSION["s_uname"]:"";

if(!$s_uid){

    echo "
        <script type='text/javascript'>
            alert(\"로그인 정보가 없습니다.\");
            location.href = \"login/login.php\";
        </script>
    ";
    exit;
};

if($s_uid != "admin001"){

    echo "
        <script type='text/javascript'>
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"../index.php\";
        </script>
    ";
    exit;
};
?>