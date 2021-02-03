<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/join.css" type="text/css" rel="stylesheet">



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

<body>
    <div class="skipMenu">
        <a href="../index.html"><span>메인메뉴</span></a>
        <a href="#main"><span>메인 콘텐츠</span></a>
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
                    <li class="top_account"><a href="../login/login.php">마이 어카운트</a></li>
                </ul>
            </div>
        </div>
        <div class="nav_bg"></div>
    </header>

    <script>
        function joinForm_check() {
            var frm = document.join_form;
            var uName = document.getElementById("uName");
            var uId = document.getElementById("uId");
            var pwd = document.getElementById("pwd");
            var pwd_len = pwd.value.length;
            var repwd = document.getElementById("repwd");
            var uBirth = document.getElementById("uBirth");
            var mobile = document.getElementById("mobile");
            var email_id = document.getElementById("email_id");
            var email_dns = document.getElementById("email_dns");
            var email_select = document.getElementById("email_select");

            var passRule = /^[A-Za-z0-9]{6,12}$/;

            if(passRule.test(pwd.value) == false){
                pwd_check.innerHTML = "숫자와 문자 포함 형태의 6~12자리 이내로 입력 가능합니다.";
                pwd.focus();
                return false;
            };
            

            if (uName.value == "") {
                uName_check.innerHTML = "이름을 입력하세요.";
                uName.focus();
                return false;
            };

            if (uId.value == "") {
                uId_check.innerHTML = "아이디를 입력하세요.";
                uId.focus();
                return false;
            };

            if (pwd.value == "") {
                pwd_check.innerHTML = "비밀번호를 입력하세요.";
                pwd.focus();
                return false;
            };

            if ((pwd_len < 5) || (pwd_len > 13)) {
                pwd_check.innerHTML = "비밀번호는 6~12글자만 입력할 수 있습니다.";
                pwd.focus();
                return false;
            };

            if (repwd.value != pwd.value) {
                repwd_check.innerHTML = "비밀번호가 다릅니다. 다시 입력하세요.";
                repwd.focus();
                return false;
            };

            if (uBirth.value == "") {
                uBirth_check.innerHTML = "생년월일을 입력하세요.";;
                uBirth.focus();
                return false;
            };

            if (mobile.value == "") {
                mobile_check.innerHTML = "전화번호를 입력하세요.";
                mobile.focus();
                return false;
            };

            var reg = /^[0-9]+$/g;
            if(reg.test(mobile.value) == false){
                mobile_check.innerHTML = "전화번호는 숫자만 입력할 수 있습니다.";
                mobile.focus();
                return false;
            };

            if (email_id.value == "") {
                email_check.innerHTML = "이메일을 입력하세요.";
                email_id.focus();
                return false;
            };

            if (email_dns.value == "") {
                email_check.innerHTML = "도메인을 선택하세요.";
                email_select.focus();
                return false;
            };

            frm.submit();
        };

        function id_check() {
            window.open("id_check.php", "idCheck", "width=600,height=300,left=0,top=0");
        };

        function change_email() {
            var idx = email_select.options.selectedIndex;
            if (email_select.options[idx].value == "") {
                email_dns.focus();
            }
            email_dns.value = email_select.options[idx].value;
        };
    </script>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        function search_postalCode() {
            new daum.Postcode({
                oncomplete: function(data) {

                    var addr = '';
                    var extraAddr = '';

                    if (data.userSelectedType === 'R') {
                        addr = data.roadAddress;
                        } else {
                        addr = data.jibunAddress;
                        }


                    if (data.userSelectedType === 'R') {

                    if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                        extraAddr += data.bname;
                        }

                    if (data.buildingName !== '' && data.apartment === 'Y') {
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }

                    if (extraAddr !== '') {
                        extraAddr = ' (' + extraAddr + ')';
                        }

                        document.getElementById("addr3").value = extraAddr;

                        } else {
                        document.getElementById("addr3").value = '';
                        }


                        document.getElementById('uAddress').value = data.zonecode;
                        document.getElementById("addr1").value = addr;

                        document.getElementById("addr2").focus();
                }
            }).open();
        }
    </script>

    <main>
        <h2>회원가입</h2>
        <div class="formWrap">
            <div class="redPoint"></div>
            <form name="join_form" action="insert.php" method="post" class="joinForm" id="join_form">
                <fieldset>
                    <legend class="hide">회원가입 정보 입력</legend>
                    <ul>
                        <li>
                            <label for="uName" class="liTitle"><span class="required">*필수입력</span>이름</label>
                            <input type="text" id="uName" name="uName" maxlength="20">
                            <br><span id="uName_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="uId" class="liTitle"><span class="required">*필수입력</span>사용자 아이디</label>
                            <input type="text" id="uId" name="uId" maxlength="16" readonly>
                            <button type="button" class="rainbowBt rainbowBt-1" onclick="id_check()">검색</button>
                            <span class="input_notice">아이디는 대/소문자,숫자,특수문자를 조합하여 6~16까지 사용가능합니다.</span>
                            <br><span id="uId_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="pwd" class="liTitle"><span class="required">*필수입력</span>비밀번호</label>
                            <input type="password" id="pwd" name="pwd">
                            <span class="input_notice">비밀번호는 대/소문자,숫자,특수문자를 조합하여 8~20까지 사용가능합니다.</span>
                            <br><span id="pwd_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="repwd" class="liTitle"><span class="required">*필수입력</span>비밀번호 확인</label>
                            <input type="password" id="repwd" name="repwd">
                            <br><span id="repwd_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="uBirth" class="liTitle"><span class="required">*필수입력</span>생년월일</label>
                            <input type="text" id="uBirth" name="uBirth" maxlength="6">
                            <span class="input_notice">숫자 6자리만 입력하세요. ex)201224</span>
                            <br><span id="uBirth_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="mobile" class="liTitle"><span class="required">*필수입력</span>전화번호</label>
                            <input type="text" id="mobile" name="mobile" maxlength="11">
                            <span class="input_notice">숫자만 입력하세요. ex)01011112222</span>
                            <br><span id="mobile_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="email_id" class="liTitle"><span class="required">*필수입력</span>이메일</label>
                            <input type="text" id="email_id" name="email_id">@
                            <input type="text" id="email_dns" name="email_dns">
                            <select id="email_select" name="email_select" onchange="change_email()">
                                <option value="">직접입력</option>
                                <option value="google.com">GOOGLE</option>
                                <option value="naver.com">NAVER</option>
                                <option value="hanmail.net">DAUM</option>
                                <option value="icloud.com">iCLOUD</option>
                            </select><br>
                            <span id="email_check" class="check_error"></span>
                        </li><br><br>
                        <li class>
                            <label for="uAddress"><span class="liTitle">주소</span></label>
                            <input type="text" id="uAddress" name="uAddress" size="6" readonly placeholder="우편번호">
                            <button type="button" class="rainbowBt rainbowBt-1" onclick="search_postalCode()">검색</button><br>
                            <input type="text" class="address_input" name="addr1" id="addr1" readonly placeholder="주소"><br>
                            <input type="text" class="address_input" name="addr2" id="addr2" placeholder="상세주소">
                            <input type="text" class="address_input" name="addr3" id="addr3" placeholder="참조사항">
                        </li><br><br>
                        <li>
                            
                            <label for="interest"><span>관심 게임</span></label><br>
                            <input type="checkbox" name="interest[]" value="동물의 숲" class="checkBox">모여봐요 동물의 숲
                            <input type="checkbox" name="interest[]" value="젤다의 전설" class="checkBox">젤다의 전설
                            <input type="checkbox" name="interest[]" value="픽민" class="checkBox">픽민 디럭스
                            <input type="checkbox" name="interest[]" value="마리오 카드" class="checkBox">마리오 카트
                            <input type="checkbox" name="interest[]" value="포켓몬스터" class="checkBox">포켓몬스터<br>
                            <input type="checkbox" name="interest_etc[]" value="#" class="checkBox">기타
                            <input type="text" name="interest_etc[]" id="interest" placeholder="기타를 선택한 경우 작성해주세요." maxlength="40" class="interest_input">
                        </li><br><br>
                        <li class="recommend">
                            <label for="recommend"><span class="liTitle">추천인</span></label>
                            <input type="text" id="recommend" name="recommend">
                        </li><br><br>
                        <li class="ad_apply">
                            <label for="ad_apply"><span class="liTitle">광고 수신 동의</span></label>
                            <input type="checkbox" name="ad_apply[]" value="sms" id="smsApply">sms 수신 동의
                            <input type="checkbox" name="ad_apply[]" value="email"id="idApply">email 수신 동의
                        </li><br><br>
                        <li class="formBt">
                            <button type="button" onclick="javascript:history.back()" class="rainbowBt2 rainbowBt-2">이전으로</button>
                            <button type="button" onclick="" class="rainbowBt2 rainbowBt-2">정보 초기화</button>
                            <button type="button" onclick="joinForm_check()" class="rainbowBt2 rainbowBt-2">회원가입</button>
                        </li>
                    </ul>
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