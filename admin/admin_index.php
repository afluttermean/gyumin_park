<?php
    session_start();
    $s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
    $s_uid = isset($_SESSION["s_uid"])? $_SESSION["s_uid"]:"";
    $s_uname = isset($_SESSION["s_uname"])? $_SESSION["s_uname"]:"";

    if(!$s_uid){
        // 비로그인 사용자 접근
        echo "
            <script type='text/javascript'>
                alert(\"로그인 정보가 없습니다.\");
                location.href = \"login/login.php\";
            </script>
        ";
        exit;
    };

    if($s_uid != "admin001"){
        // 일반 사용자 접근
        echo "
            <script type='text/javascript'>
                alert(\"관리자 로그인이 필요합니다.\");
                location.href = \"../index.php\";
            </script>
        ";
        exit;
    };

?>

    <!DOCTYPE html>
    <html lang="ko">

    <?php if($s_uid){ ?>
    <script>
        function logout_check(){
            var rt = confirm("정말 로그아웃하시겠습니까?");
            if(rt){
                location.href = "./login/logout_ok.php";
            };
        };
    </script>
    <?php } ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>관리자 페이지</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="../css/admin_index.css" type="text/css" rel="stylesheet">
        <script src="../jquery-3.5.1.min.js"></script>
    </head>

    <body>
        <div class="skipMenu">
            <a href="http://naver.com/"><span>메인메뉴</span></a>
            <a href="#content_mainimage"><span>메인이미지</span></a>
            <a href="#software"><span>게임소프트웨어안내</span></a>
            <a href="#notice"><span>공지사항</span></a>
            <a href="#event"><span>이벤트</span></a>
            <a href="#footer"><span>하단메뉴</span></a>
        </div>
        <header id="header" class="header">
            <div class="headerwrap">
                <h1><a href="#./admin_index.php">닌텐도</a></h1>
            </div>
        </header>
        <main>
            <h2>관리자 페이지</h2>
            <div class="nameWrap">
                <p class="u_name">"<span class="boldText"><?php echo $s_uname; ?>"</span>님 환영합니다.</p>
            </div>
            <div class="formWrap">
                <div class="redPoint"></div>
                <div class="main_content">
                    <ul>
                        <li class="admin_home"><a href="../index.html">홈페이지로 이동</a></li>
                        <li class="admin_files"><a href="./members/notice.php">게시글 관리</a></li>
                        <li class="admin_mem"><a href="./members/list.php">회원관리</a></li>
                        <li class="admin_logout"><a href="#" onclick="logout_check()">로그아웃</a></li>
                    </ul>
                </div>
            </div>

        </main>
        <footer>


        </footer>
    </body>

    </html>