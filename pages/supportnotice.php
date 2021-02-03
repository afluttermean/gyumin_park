<?php
    session_start();
    $s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
    $s_uid = isset($_SESSION["s_uid"])? $_SESSION["s_uid"]:"";
    $s_uname = isset($_SESSION["s_uname"])? $_SESSION["s_uname"]:"";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수리 안내</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/supportnotice.css" type="text/css" rel="stylesheet">



    <script src="../jquery-3.5.1.min.js"></script>

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
    <?php if($s_uid){ ?>
    <script>
        function logout_check() {
            var rt = confirm("정말 로그아웃하시겠습니까?");
            if (rt) { // if(rt == true){
                location.href = "../login/logout_ok.php";
            };
        };
    </script>
    <?php } ?>
</head>

<body>
    <div class="skipMenu">
        <a href="./supportnotice.php"><span>메인메뉴</span></a>
        <a href="#main"><span>메인콘텐츠</span></a>
        <a href="#footer"><span>하단메뉴</span></a>
    </div>
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
                                <a href="../pages/software_3ds.html">
                                    <p class="hide">닌텐도 3DS 소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_softphone">
                                <a href="">
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
                                <a href="#none">
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
                                <a href="../pages/supportnotice.php">
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
                    <?php 
                            if($s_uid){
                        ?>
                    <li class="top_logout"><a href="#none" onclick="logout_check()">로그아웃</a></li>
                    <?php } else if(!$s_uid){ ?>
                    <li class="top_account"><a href="../login/login.php">마이 어카운트</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="nav_bg"></div>
    </header>
    <main>
        <h2>A/S 접수 안내</h2>
        <?php if($s_uid){ ?>
            <div class="nameWrap">
                <p class="u_name">"<span class="boldText"><?php echo $s_uname; ?>"</span>님 환영합니다.</p>
            </div>
        <?php }; ?>
        <div class="formWrap">
            <div class="redPoint"></div>
            <h3>온라인 A/S 접수를 통해 보다 편리하고 저렴하게 서비스를 받아보세요.</h3>
            <div class="maincontentWrap">
                <div class="noticeComent">
                    <h3 class="online_service">온라인 A/S 접수 혜택</h3>
                    <ul>
                        <li class="support_discount"><p>1. 수리 금액 5% 할인<p></li>
                        <li class="support_realtime"><p>2. 사전 온라인 접수를 통한 신속 대응<p></li>
                        <li class="support_alarm"><p>3. 이메일 또는 카카오톡을 통한<br>&nbsp;&nbsp;&nbsp;&nbsp;수리 진행 상황 안내<p></li>
                    </ul>
                </div>
                <div class="buttonWrap">
                    <ul>
                        <li><a href="" class="asBt">온라인 A/S 접수</a></li>
                        <li><a href="" class="repairBt">수리 / 배송 조회</a></li>
                        <li><a href="" class="wifiBt">Wi-Fi 문제 해결</a></li>
                        <li><a href="" class="contactBt">상담 및 문의처</a></li>
                        <li><a href="" class="onlineBt">온라인 구입 안내</a></li>
                        <li><a href="" class="questionBt">자주 묻는 질문</a></li>
                    </ul>
                </div>
            </div>
            <div class="repairprogress">
                <h2>온라인 A/S 처리 순서</h2>
                <div class="redPoint2"></div>
                <div class="repairContent">
                    <ul>
                        <li>
                            <img src="../images/support_no1.png" alt="1번">
                            <img src="../images/support_notice_user.png" alt="사용자" id="support_user">
                            <h4 class="person_user">A/S 신청</h4>
                            <p>온라인 A/S 접수 페이지에서 필요 항목을 입력해주세요.<br>
                            <span id="greyText">* 회원 계정이 없는 경우에는 온라인 접수가 불가능합니다. 센터 방문을 통해 접수해주세요.</span></p>
                        </li>
                        <li>
                            <img src="../images/support_no2.png" alt="2번">
                            <img src="../images/support_notice_user.png" alt="사용자" id="support_user">
                            <h4 class="person_user">수리 제품을 닌텐도 서비스 센터에 보내주세요.<br><span id="greyText">배송료에 관하여 <a href="#" class="support_comBt">확인하기</a></span></h4>
                            <span id="greyText">* 방문 접수는 예약제로 진행되고 있습니다. 1670-9900으로 전화 후 예약 부탁드립니다.</span>
                            <div class="no2_info">
                                <p>수리 제품과 함께 동봉하여 보내주실 물건.</p>
                                <ul>
                                    <li>・ 보증서 (보증 기간이 남아있는 경우)<br><span id="greyText">* 보증 기간이 남아 있어도 수리비가 발생 할 수 있습니다. 유상 수리에 관하여<a href="" class="support_comBt">확인하기</a></span></li>
                                    <li>・ 문제 발생과 관련 있는 소프트에어 또는 기기</li>
                                    <li>・ 온라인 신청시 출력 가능한 [A/S 의뢰서] 또는 [A/S 신청 번호화 전화번호]를 기재한 메모지</li>
                                </ul>
                                <p>상세 내용은 하단의 각 제품 페이지에서 확인해 주세요.</p>
                                <div class="imagesGroup">
                                    <a href="#"><img src="../images/support_notice_switchBt.png" alt="닌텐도 스위치 내용 확인"></a>
                                    <a href="#"><img src="../images/support_notice_3dsBt.png" alt="닌텐도 3DS 내용 확인"></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="../images/support_no3.png" alt="3번">
                            <img src="../images/support_notice_nintendo.png" alt="닌텐도" id="support_user">
                            <h4 class="person_nintendo">수리제품의 접수</h4>
                            <p>수리제품 도착 후, 수리 접수까지 평균 3=4일 정도 소요됩니다.</p>
                        </li>
                        <li>
                            <img src="../images/support_no4.png" alt="4번">
                            <img src="../images/support_notice_nintendo.png" alt="닌텐도" id="support_user">
                            <h4 class="person_nintendo">수리대금 견적서</h4>
                            <p>수리대금 견적서 요청을 하신 분에 한하여, 메일 또는 핸드폰을 통해 연락드립니다.<br>메일의 URL을 통해 수리 여부를 입력해주세요.</p>
                            <span id="greyText">* 수리대금의 평균 금액은, 오른쪽의 버튼을 클릭하여 확인해주세요.<a href="" class="support_comBt">확인하기</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;견적서 연락 후 1개월 간 연락이 없는 경우 수리하지 않은채, 반송되므로 주의 부탁드립니다.</span>
                        </li>
                        <li>
                            <img src="../images/support_no5.png" alt="5번">
                            <img src="../images/support_notice_nintendo.png" alt="닌텐도" id="support_user">
                            <h4 class="person_nintendo">수리</h4>
                            <p>수리 품목/부품 재고에 따라 수리기간에 차이가 있습니다.</p>
                        </li>
                        <li>
                            <img src="../images/support_no6.png" alt="6번">
                            <img src="../images/support_notice_nintendo.png" alt="닌텐도" id="support_user">
                            <h4 class="person_nintendo">수리 완료 후 배송</h4>
                            <p>지역에 따라 배송기간에 차이가 있습니다.</p>
                        </li>
                        <li>
                            <img src="../images/support_no7.png" alt="7번" id="support_no7">
                            <img src="../images/support_notice_nintendo.png" alt="닌텐도" id="support_user">
                            <h4 class="person_user">배송 도착</h4>
                            <p>제품을 수령하시고 이상이 있으시거나, 문의사항이 있으시다면, 문의하기 또는 문의 번호 1670-9900으로 연락 부탁드립니다.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </main>
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
                    <dd><a href="../pages/supportnotice.php">수리안내</a></dd>
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