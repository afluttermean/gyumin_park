<meta charset="utf-8">
<?php

session_start();

// 세션 변수 삭제
unset($_SESSION["idx"]);
unset($_SESSION["uname"]);
unset($_SESSION["uid"]);

echo "
    <script>
        alert('로그아웃 되었습니다.');
        location.href = '../index.html';
    </script>
";

?>
