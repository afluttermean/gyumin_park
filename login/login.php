<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../jquery-3.5.1.min.js"></script>

    <script src="../libraries/bxslider-4-4.2.12/src/js/jquery.bxslider.js"></script>
    <link rel="stylesheet" href="../libraries/bxslider-4-4.2.12/src/css/jquery.bxslider.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $('.main_imageslide').bxSlider({
                auto: true,
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".gnb_menu>ul>li").mouseenter(function() {
                $(this).find("ul").stop().slideDown("fast");
                $(".nav_bg").stop().slideDown("fast");
            });

            $(".gnb_menu>ul>li").mouseleave(function() {
                $(this).find("ul").stop().slideUp("fast");
                $(".nav_bg").stop().slideUp("fast");
            });
        });
        $(function() {
            $(".serchForm legend").mouseenter(function() {
                $(".serchForm input").stop().show("fast");
            });
            $(".serchForm input").mouseleave(function() {
                $(".serchForm input").stop().hide("fast");
            });
        });
    </script>
</head>

<body id="content">
    <header id="header" class="header">
        <div class="headerwrap">
            <nav class="gnb_menu">
                <h1><a href="../index.html">닌텐도</a></h1>
                <h2 class="hide"><a href="">주요 메뉴</a></h2>
                <ul>
                    <li class="gnb_menu1"><a class="menu1_a" href="">라인업</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_ns">
                                <a href="../pages/lineup_ns.html">
                                    <p class="hide">Nintendo Switch</p>
                                </a>
                            </li>
                            <li class="sdepth_nsl">
                                <a href="">
                                    <p class="hide">Nintendo Switch lite</p>
                                </a>
                            </li>
                            <li class="sdepth_3ds">
                                <a href="">
                                    <p class="hide">Nintendo 3DS</p>
                                </a>
                            </li>
                            <li class="sdepth_nmc">
                                <a href="">
                                    <p class="hide">Nintendo Classic mini</p>
                                </a>
                            </li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">모든제품 보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_menu2"><a class="menu2_a" href="">아미보</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_amiibologo"></li>
                            <li class="sdepth_amiibo">
                                <a href="">
                                    <p class="hide">아미보 특징</p>
                                </a>
                            </li>
                            <li class="sdepth_amiiboline">
                                <a href="">
                                    <p class="hide">라인업</p>
                                </a>
                            </li>
                            <li class="sdepth_amiibosoft">
                                <a href="">
                                    <p class="hide">대응 소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_amiiboset">
                                <a href="">
                                    <p class="hide">세트상품</p>
                                </a>
                            </li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">모든제품 보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_menu3"><a class="menu3_a" href="">게임소프트웨어</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_softns">
                                <a href="../pages/software_ns.html">
                                    <p class="hide">닌텐도 스위치 소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_soft3ds">
                                <a href="./pages/software_ns.html">
                                    <p class="hide">닌텐도 3DS 소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_softphone">
                                <a href="../pages/software_3ds.html">
                                    <p class="hide">스마트폰용 소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_softrel">
                                <a href="">
                                    <p class="hide">발매 예정소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_softfree">
                                <a href="">
                                    <p class="hide">무료 다운로드</p>
                                </a>
                            </li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">모든제품 보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_menu4"><a class="menu4_a" href="">캐릭터 소개</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_mario">
                                <a href="">
                                    <p class="hide">마리오</p>
                                </a>
                            </li>
                            <li class="sdepth_animal">
                                <a href="">
                                    <p class="hide">동물의 숲</p>
                                </a>
                            </li>
                            <li class="sdepth_zelda">
                                <a href="">
                                    <p class="hide">젤다의 전설</p>
                                </a>
                            </li>
                            <li class="sdepth_fire">
                                <a href="">
                                    <p class="hide">파이어 엠블렘</p>
                                </a>
                            </li>
                            <li class="sdepth_kirby">
                                <a href="">
                                    <p class="hide">별의 커비</p>
                                </a>
                            </li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">모든제품 보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_menu5"><a class="menu5_a" href="">공지사항</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_notice">
                                <a href="#">
                                    <p class="hide">공지사항</p>
                                </a>
                            </li>
                            <li class="noticeLogo">
                                <a href="#">
                                    <p class="hide">공지사항</p>
                                </a>
                            </li>
                            <li class="sdepth_noticeevent">
                                <a href="">
                                    <p class="hide">이벤트</p>
                                </a>
                            </li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">전체 보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_menu6"><a class="menu6_a" href="">서포트</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_support">
                                <a href="../pages/supportnotice.html">
                                    <p class="hide">수리안내</p>
                                </a>
                            </li>
                            <li class="sdepth_supportswitch">
                                <a href="">
                                    <p class="hide">Nintendo Switch</p>
                                </a>
                            </li>
                            <li class="sdepth_support3ds">
                                <a href="">
                                    <p class="hide">Nintendo 3DS</p>
                                </a>
                            </li>
                            <li class="sdepth_supportwell">
                                <a href="">
                                    <p class="hide">자주하는 질문</p>
                                </a>
                            </li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">전체보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="top_menu">
                <h2 class="hide">사용자 메뉴</h2>
                <ul>
                    <li class="top_search">
                        <form name="top_search_frm" action="" method="post" class="serchForm">
                            <fieldset class="search_put">
                                <legend class="top_search_title"><a href="">검색</a></legend>
                                <input type="text" name="search" class="searchShow">
                                <a href="#" onclick="" class="searchBt searchShow">검색</a>
                            </fieldset>
                        </form>
                    </li>
                    <li class="top_online"><a href="">온라인 스토어</a></li>
                    <li class="top_account"><a href="./login.php">마이 어카운트</a></li>
                </ul>
            </div>
        </div>
        <div class="nav_bg"></div>
    </header>
    <div class="content">
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
                    <input type="checkbox" class="login_save" onclick="id_save()">아이디 저장
                    <a href="" class="login_find">아이디 / 비밀번호 찾기</a>
                </fieldset>
            </form>
            <div class="signup ">
                <p class="signup_button1"><a href="../join/usage_agreement.php">회원가입</a></p>
                <p class="signup_button2"><a href="">구글계정으로 로그인</a></p>
                <p class="signup_button3"><a href="">페이스북 계정으로 로그인</a></p>
                <p class="signup_button4"><a href="">트위터 계정으로 로그인</a></p>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer">
        <div class="footer_underbars"></div>
        <div class="footer_wrap">
            <section class="footermenu">
                <h2 class="hide">하단 사이트 메뉴</h2>
                <dl class="footermenu_lineup">
                    <dt><a href="#none">Lineup</a></dt>
                    <dd><a href="../pages/lineup_ns.html">Nintendo Switch</a></dd>
                    <dd><a href="">Nintendo Switch lite</a></dd>
                    <dd><a href="">Nintendo 3DS</a></dd>
                    <dd><a href="">Nintendo Classic mini</a></dd>
                    <dd><a href="">라인업 모든 제품 보기</a></dd>
                </dl>
                <dl class="footermenu_amiibo ">
                    <dt><a href="#none">Amiibo</a></dt>
                    <dd><a href=" ">라인업</a></dd>
                    <dd><a href=" ">대응 소프트웨어</a></dd>
                    <dd><a href=" ">세트 상품</a></dd>
                    <dd><a href=" ">모든 제품 보기</a></dd>
                </dl>
                <dl class="footermenu_software ">
                    <dt><a href="#none">Software</a></dt>
                    <dd><a href="../pages/sfotware_ns.html">Nintendo Switch 소프트</a></dd>
                    <dd><a href="../pages/sfotware_3ds.html">Nintendo 3DS 소프트</a></dd>
                    <dd><a href="">스마트폰용 소프트</a></dd>
                    <dd><a href="">발매 예정 소프트웨어</a></dd>
                    <dd><a href="">무료 다운로드</a></dd>
                    <dd><a href="">전체 보기</a></dd>
                </dl>
                <dl class="footermenu_character ">
                    <dt><a href="#none">Character</a></dt>
                    <dd><a href="">마리오</a></dd>
                    <dd><a href="">동물의 숲</a></dd>
                    <dd><a href="">젤다의 전설</a></dd>
                    <dd><a href="">파이어 엠블렘</a></dd>
                    <dd><a href="">별의 커비</a></dd>
                    <dd><a href="">전체 보기</a></dd>
                </dl>
                <dl class="footermenu_notice ">
                    <dt><a href="#none">공지사항</a></dt>
                    <dd><a href="">공지사항</a></dd>
                    <dd><a href="">이밴트</a></dd>
                    <dd><a href="">전체보기</a></dd>
                </dl>
                <dl class="footermenu_support ">
                    <dt><a href="#none">소비자 지원안내</a></dt>
                    <dd><a href="../pages/supportnotice.html">수리안내</a></dd>
                    <dd><a href="">Nintendo Switch</a></dd>
                    <dd><a href="">Nintendo 3DS</a></dd>
                    <dd><a href="">자주하는 질문</a></dd>
                    <dd><a href="">전체보기</a></dd>
                </dl>
            </section>

            <div class="footer_button">
                <p class="footerbt_account"><a href="./login.php">마이 어카운트</a></p>
                <p class="footerbt_online"><a href="">온라인 샵</a></p>
            </div>
            <div class="footer_info">
                <section class="footermenu_supportinfo">
                    <h2 class="hide ">고객지원 안내</h2>
                    <p>고객지원 문의전화 : 1670-9900<br> (평일 오전 9시30분 ~오후 5시30분)<br> 토/일/공휴일/회사 정기휴일 제외</p>
                </section>
                <section class="footermenu_companyinfo">
                    <h2 class="hide">회사 정보</h2>
                    <p>상호명 : 한국닌텐도(주)<br> 대표자명 : 미우라 타카히로<br> 사업자 등록번호 : 120-87-03578</p>
                </section>
            </div>

        </div>
        <div class="footer_underbars"></div>
        <div class="footer_wrap">
            <div class="user_select">
                <a href="" class="selcet_countries">Countries / Languages</a>
            </div>
            <div class="footer_usepolicy">
                <ul>
                    <li class="footer_pp"><a href="">Privacy policy</a></li>
                    <li class="footer_tu"><a href="">Term of use</a></li>
                    <li class="footer_sales"><a href="">Saless</a></li>
                    <li class="footer_legal"><a href="">Legal</a></li>
                    <li class="footer_sitemap"><a href="../pages/sitemap.html">Site Map</a></li>
                </ul>
            </div>
            <p class="copyright ">copyright 2020 afluttermeans inc. All rights reserved.</p>
        </div>

    </footer>
</body>

</html>