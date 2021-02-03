<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <script src="../jquery-3.5.1.min.js"></script>

    <script src="../libraries/bxslider-4-4.2.12/src/js/jquery.bxslider.js"></script>
    <link rel="stylesheet" href="../libraries/bxslider-4-4.2.12/src/css/jquery.bxslider.css">

<body id="content">
    <header id="header" class="header">
        <div class="headerwrap">
            <h1><a href="#./admin_index.php">닌텐도</a></h1>
        </div>
    </header>
    <main class="content">
        <div class="content_login">
            <h2>로그인</h2>
            <script type="text/javascript">
                function login_check() {
                    var uid = document.getElementById("uId");
                    var pwd = document.getElementById("pwd");

                    if (!uid.value) {
                        var check_id = document.querySelector(".checkId");
                        check_id.textContent = "아이디를 입력하세요";
                        uid.focus();
                        return false;
                    };
                    if (!pwd.value) {
                        var check_pwd = document.querySelector(".checkPwd");
                        check_pwd.textContent = "비밀번호를 입력하세요";
                        pwd.focus();
                        return false;
                    };

                    document.login_form.submit();

                };
            </script>
            <form name="login_form" action="./login_ok.php" method="post" class="login">
                <fieldset>
                    <legend class="hide">로그인</legend>
                    <p class="login_id">
                        <label for="uId" class="hide">아이디</label>
                        <input type="text" name="uId" id="uId" placeholder="아이디 또는 이메일을 입력하세요.">
                        <br>
                        <span class="checkId"></span>
                    </p>
                    <p class="login_pwd">
                        <label for="pwd" class="hide">비밀번호</label>
                        <input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요.">
                        <br>
                        <span class="checkPwd"></span>
                    </p>
                    <p class="login_bt"><a onclick="login_check()">로그인</a></p>
                    <input type="checkbox" class="login_save">아이디 저장
                    <a href=" " class="login_find ">아이디 / 비밀번호 찾기</a>
                </fieldset>
            </form>
        </div>
        </main>
</body>

</html>