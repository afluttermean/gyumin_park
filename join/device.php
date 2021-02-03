<?php
session_start();

$idx = $_SESSION["s_idx"];
$uid = $_SESSION["s_uid"];
$uname = $_SESSION["s_uname"];

if(!$idx){
    echo "
        <script type='text/javascript'>
            alert('로그인 정보가 없습니다.');
            location.href='../index.html';
        </script>
    ";
    exit;
};

include "../dbcon/dbcon.php";
$sql ="select * from device, members where device.uid =members.uid and uname='$uname';";


$result = mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);
$list_num = 3;


$page_num = 2;

$page = isset($_GET["page"])? $_GET["page"] : 1;

$total_page = ceil($num/$list_num);

$total_block = ceil($total_page/$page_num);

$now_block = ceil($page/$page_num);


$s_pageNum = ($now_block-1) * $page_num + 1;

if($s_pageNum <= 0){
    $s_pageNum = 1;
};


$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};



?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $uname; ?>님 디바이스 정보</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/device.css" type="text/css" rel="stylesheet">



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
</head>

<?php 
    if($uid){ 
?>
    <script>
        function logout_check(){
            var rt = confirm("정말 로그아웃하시겠습니까?");
            if(rt){  // if(rt == true){
                location.href = "../login/logout_ok.php";
            };
        };
    </script>
    <?php }; ?>
    <script>
        function del_dev(device_no){

            var rt = confirm("디바이스 정보를 삭제하시겠습니까?");
            if(rt){
                location.href = "./device_del_ok.php?device_no="+device_no;
            };
        };
    </script>
    <script type="text/javascript">
                function deviceFrom_check(){
                    var frm = document.deviceForm;
                    var deviceName = document.getElementById("device_na");
                    var deviceNum = document.getElementById("device_num");
                    var payment_date = document.getElementById("payment_date");
                    var payment_location = document.getElementById("payment_location");

                    if(deviceName.value == ""){
                        deviceName_check.innerHTML = "디바이스를 선택하세요.";
                        deviceName.focus();
                        return false;
                    };

                    if(deviceNum.value == ""){
                        device_check.innerHTML = "디바이스 씨리얼 넘버를 입력하세요.";
                        deviceNum.focus();
                        return false;
                    };

                    if(payment_date.value == ""){
                        date_check.innerHTML = "구매일 또는 수령일을 입력하세요.";
                        payment_date.focus();
                        return false;
                    };


                    if(payment_location.value == ""){
                        location_check.innerHTML = "구매매장 또는 온라인매장 이름을 입력하세요.";
                        payment_location.focus();
                        return false;
                    };

                    frm.submit();
                };
                function change_device() {
                    var idx = device_select.options.selectedIndex;
                    device_na.value = device_select.options[idx].value;
                };

                function reset_form(){
                    document.getElementById("device_na").value='';
                    document.getElementById("device_num").value='';
                    document.getElementById("payment_date").value='';
                    document.getElementById("payment_location").value='';
                };
            </script>
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
            <nav class="gnb_menu">
                <h1><a href="index.html">닌텐도</a></h1>
                <h2 class="hide"><a href="">주요 메뉴</a></h2>
                <ul>
                    <li class="gnb_menu1"><a class="menu1_a" href="">라인업</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_ns">
                                <a href="">
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
                                <a href="">
                                    <p class="hide">닌텐도 스위치 소프트웨어</p>
                                </a>
                            </li>
                            <li class="sdepth_soft3ds">
                                <a href="">
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
                            <li class="sdepth_notice"><a href="">공지사항</a></li>
                            <li class="sdepth_event"><a href="">이벤트</a></li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">모든제품 보기</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gnb_menu6"><a class="menu6_a" href="">서포트</a>
                        <ul class="gnb_2depth">
                            <li class="sdepth_supall"><a href="">수리안내</a></li>
                            <li class="sdepth_supall"><a href="">Nintendo Switch</a></li>
                            <li class="sdepth_supall"><a href=""> Nintendo 3DS</a></li>
                            <li class="sdepth_supall"><a href="">자주하는 질문</a></li>
                            <li class="sdepth_all">
                                <a href="">
                                    <p class="hide">모든제품 보기</p>
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
                        if($uid){
                    ?>
                    <li class="top_logout"><a href="#none" onclick="logout_check()">로그아웃</a></li>
                    <?php } else{ ?>
                        <li class="top_account"><a href="./login.php">마이 어카운트</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="nav_bg"></div>
    </header>

    <main>
        <h2>디바이스 정보</h2>
        <div class="nameWrap">
            <p class="u_name">"<span class="boldText"><?php echo $uname; ?></span>"님 환영합니다.</p>
        </div>
        <div class="formWrap">
            <div class="redPoint"></div>
            <?php 
                if(!$array){
            ?>
                <div class="noDevice_wrap">
                    <h3 class="noDevice">등록된 디바이스 정보가 없습니다.</h3>
                </div>
            <?php
                } else{
            ?>
                <div class="deviceInfo">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 20px;">No.</th>
                                <th style="width: 270px;">디바이스</th>
                                <th style="width: 120px;">시리얼 넘버</th>
                                <th style="width: 60px;">구매일자</th>
                                <th style="width: 30px;">설정</th>
                            </tr>
                        </thead>
                        <?php
                            $start = ($page - 1) * $list_num;
                            $sql ="select * from device, members where device.uid =members.uid and uname='$uname';";
                            $result = mysqli_query($con, $sql);
                            $cnt = $start + 1;
                            $device_no = $array["device_no"];
                            while($array = mysqli_fetch_array($result)){  
    
                        ?>                  
                            <tbody>
                                <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td>
                                        <?php if($array["device_name"] == "닌텐도 스위치(Nintendo Switch)"){ ?>
                                            <img src="../images/device_switch.png" alt="닌텐도스위치">
                                        <?php } else if($array["device_name"] == "닌텐도 스위치 라이트(Nintendo Switch Lite)"){ ?>
                                            <img src="../images/device_lite.png" alt="닌텐도스위치 lite">
                                        <?php } else if($array["device_name"] == "닌텐도 3DS(Nintendo 3DS)"){ ?>
                                            <img src="../images/device_3ds.png" alt="닌텐도스위치 3DS">
                                        <?php } else if($array["device_name"] == "닌텐도 클래식 미니(Nintendo Classic Mini)"){ ?>
                                        <img src="../images/device_mini.png" alt="닌텐도스위치 클래식 미니">
                                        <?php } else{ ?>
                                            <img src="../images/device_etc.png" alt="기타">
                                        <?php } ?>
                                        <p><?php echo $array["device_name"]; ?></p>
                                    </td>
                                    <td><?php echo $array["device_no"]; ?></td>
                                    <td><?php echo $array["update_date"]; ?></td>
                                    <td>
                                        <a href="#none" onclick="del_dev('<?php echo $device_no; ?>')">삭제</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php  
                            $cnt++;
                            };  
                        ?>
                    </table>
                    <?php if($page > 1){ ?>
                        <p class="pagingTitle">
                            <?php
                                if($page <= 1){
                            ?>
                            <a href="device.php?page=1" class="pagingBack">이전</a>
                            <?php
                                } else{
                            ?>
                            <a href="device.php?page=<?php echo ($page-1); ?>" class="pagingBack">이전</a>
                            <?php
                                };
                            ?>
                            
                            <?php
                            for( $print_page = $s_pageNum;  $print_page <= $e_pageNum;  $print_page++){
                            ?>
                                <a href="device.php?page=<?php echo $print_page; ?>" class="paging"><?php echo $print_page; ?></a>
                            <?php
                            };
                            ?>
                            
                            <?php
                                if($page >= $total_page){
                            ?>
                            <a href="device.php?page=<?php echo $total_page; ?>" class="pagingNext">다음</a>
                            <?php
                                } else{
                            ?>
                            <a href="device.php?page=<?php echo ($page+1); ?>" class="pagingNext">다음</a>
                            <?php
                                };
                            ?>
                        </p>
                    <?php }; ?>
                </div>
            <?php
                };
            ?>
            <form name="deviceForm" action="device_regok.php" method="post" class="deviceForm">
                <fieldset>
                    <legend class="hide">디바이스 정보 등록</legend>
                    <span class="form_notice">* 된 모든 항목을 입력해주세요.</span>
                    <p class="device_nameWrap"> 
                        <label for="device_na" class="pTitle">*디바이스 선택
                        <input type="text" id="device_na" name="device_na" readonly>
                        <select id="device_select" name="device_select" onchange="change_device()">
                            <option value="">선택하기</option>
                            <option value="닌텐도 스위치(Nintendo Switch)">Nintendo Switch</option>
                            <option value="닌텐도 스위치 라이트(Nintendo Switch Lite)">Nintendo Switch Lite</option>
                            <option value="닌텐도 3DS(Nintendo 3DS)">Nintendo 3DS</option>
                            <option value="닌텐도 클래식 미니(Nintendo Classic Mini)">Nintendo Classic Mini</option>
                            <option value="그 외 디바이스">etc</option>
                        </select>
                        <span id="deviceName_check" class="checkSpan"></span>
                    </p>
                    <p>
                        <label for="device_num" class="pTitle">*디바이스 넘버 입력<span class="deviceNotice">ffff-dddd-cccc-0000</span>
                        <input type="text" name="device_num" id="device_num">
                        <span id="device_check" class="checkSpan"></span>
                    </p>
                    <p>
                        <label for="payment_date" class="pTitle">*구매 일자<span class="deviceNotice">예)210101 숫자 6자로 입력해주세요.</span>
                        <input type="text" name="payment_date" id="payment_date">
                        <span id="date_check" class="checkSpan"></span>
                    </p>
                    <p>
                        <label for="payment_location" class="pTitle">*구매 매장
                        <input type="text" name="payment_location" id="payment_location">
                        <span id="location_check" class="checkSpan"></span>
                    </p>
                    <p class="formBt">
                        <button type="button" onclick="javascript:location.href='mypage.php'" class="rainbowBt2 rainbowBt-2">이전 페이지</button>
                        <button type="button" onclick="reset_form()" class="rainbowBt2 rainbowBt-2">입력 초기화</button>
                        <button type="button" onclick="deviceFrom_check()" class="rainbowBt2 rainbowBt-2">등록하기</button>
                    </p>
                </fieldset>
            </form>
        </div>

    </main>


    <footer id="footer" class="footer">
        <div class="footer_underbars"></div>
        <div class="footer_wrap">
            <section class="footermenu">
                <h2 class="hide">하단 사이트 메뉴</h2>
                <dl class="footermenu_lineup">
                    <dt><a href="">Lineup</a></dt>
                    <dd><a href="">Nintendo Switch</a></dd>
                    <dd><a href="">Nintendo Switch lite</a></dd>
                    <dd><a href="">Nintendo 3DS</a></dd>
                    <dd><a href="">Nintendo Classic mini</a></dd>
                    <dd><a href="">라인업 모든 제품 보기</a></dd>
                </dl>
                <dl class="footermenu_amiibo">
                    <dt><a href="">Amiibo</a></dt>
                    <dd><a href="">라인업</a></dd>
                    <dd><a href="">대응 소프트웨어</a></dd>
                    <dd><a href="">세트 상품</a></dd>
                    <dd><a href="">모든 제품 보기</a></dd>
                </dl>
                <dl class="footermenu_software">
                    <dt><a href="">Software</a></dt>
                    <dd><a href="">Nintendo Switch 소프트</a></dd>
                    <dd><a href="">Nintendo 3DS 소프트</a></dd>
                    <dd><a href="">스마트폰용 소프트</a></dd>
                    <dd><a href="">발매 예정 소프트웨어</a></dd>
                    <dd><a href="">무료 다운로드</a></dd>
                    <dd><a href="">전체 보기</a></dd>
                </dl>
                <dl class="footermenu_character">
                    <dt><a href="">Character</a></dt>
                    <dd><a href="">마리오</a></dd>
                    <dd><a href="">동물의 숲</a></dd>
                    <dd><a href="">젤다의 전설</a></dd>
                    <dd><a href="">파이어 엠블렘</a></dd>
                    <dd><a href="">별의 커비</a></dd>
                    <dd><a href="">전체 보기</a></dd>
                </dl>
                <dl class="footermenu_notice">
                    <dt><a href="">공지사항</a></dt>
                    <dd><a href="">공지사항</a></dd>
                    <dd><a href="">이밴트</a></dd>
                    <dd><a href="">전체보기</a></dd>
                </dl>
                <dl class="footermenu_support">
                    <dt><a href="">소비자 지원안내</a></dt>
                    <dd><a href="">수리안내</a></dd>
                    <dd><a href="">Nintendo Switch</a></dd>
                    <dd><a href="">Nintendo 3DS</a></dd>
                    <dd><a href="">자주하는 질문</a></dd>
                    <dd><a href="">전체보기</a></dd>
                </dl>
            </section>

            <div class="footer_button">
                <p class="footerbt_account"><a href="">마이 어카운트</a></p>
                <p class="footerbt_online"><a href="">온라인 샵</a></p>
            </div>
            <div class="footer_info">
                <section class="footermenu_supportinfo">
                    <h2 class="hide">고객지원 안내</h2>
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
                    <li class="footer_sitemap"><a href="">Site Map</a></li>
                </ul>
            </div>
            <p class="copyright">copyright 2020 afluttermeans inc. All rights reserved.</p>
        </div>

    </footer>

</body>

</html>