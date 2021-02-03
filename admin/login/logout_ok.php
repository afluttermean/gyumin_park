<?php

session_start();

unset($_SESSION["idx"]);
unset($_SESSION["uname"]);
unset($_SESSION["uid"]);

echo "
    <script>
        alert(\"로그아웃 되었습니다.\");
        location.href = './login.php';
    </script>
";

?>
