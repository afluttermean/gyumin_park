<?php
include "../inc/user_check.php";

$idx = $_GET["idx"];
include "../../dbcon/dbcon.php";
$sql = "select * from members where idx=$idx;";
$result = mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $array["uname"]; ?>님 정보 수정</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../../css/admin_view.css" type="text/css" rel="stylesheet">



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
        <a href="http://naver.com/"><span>메인메뉴</span></a>
        <a href="#content_mainimage"><span>메인이미지</span></a>
        <a href="#software"><span>게임소프트웨어안내</span></a>
        <a href="#notice"><span>공지사항</span></a>
        <a href="#event"><span>이벤트</span></a>
        <a href="#footer"><span>하단메뉴</span></a>
    </div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원관리 페이지</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="../../css/admin_memlist.css" type="text/css" rel="stylesheet">
        <script src="../../jquery-3.5.1.min.js"></script>
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
                <h1><a href="#../admin_index.php">닌텐도</a></h1>
            </div>
        </header>

    <script type="text/javascript">
        function members_check() {
            var frm = document.edit_form;
            var pwd = document.getElementById("pwd");
            var pwd_len = pwd.value.length;
            var repwd = document.getElementById("repwd");
            var uBirth = document.getElementById("uBirth");
            var mobile = document.getElementById("mobile");
            var email_id = document.getElementById("email_id");
            var email_dns = document.getElementById("email_dns");
            var email_select = document.getElementById("email_select");
            var sms_apply = document.getElementById("smsApply");
            var email_apply = document.getElementById("emailApply");
            
            
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

        function change_email() {
            var idx = email_select.options.selectedIndex;
            if (email_select.options[idx].value == "") {
                email_dns.focus();
            }
            email_dns.value = email_select.options[idx].value;
        };

        function members_del(){
            var rt = confirm("정말 탈퇴하시겠습니까?");
            if(rt){
                location.href = "./members_del_ok.php";
            };
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
        <script>
        function del_mem(idx){
            var rt = confirm("회원정보를 삭제하시겠습니까?");
            if(rt){
                // alert("delete_ok.php?idx="+idx);
                location.href = "delete_ok.php?idx="+idx;
            };
        };
    </script>

    <main>
        <h2>회원정보 수정</h2>
        <div class="nameWrap">
            <p class="u_name">"<span class="boldText"><?php echo $s_uname; ?>"</span>님 환영합니다.</p>
        </div>
        <div class="formWrap">
            <div class="redPoint"></div>
            <form name="edit_form" action="members_edit_ok.php" method="post" class="editForm">
                <fieldset>
                    <legend class="hide">회원정보 수정</legend>
                    <ul>
                        <li>
                            <label for="uName" class="liTitle">이름</label>
                            <input type="text" id="uName" name="uName" maxlength="20" value="<?php echo $array["uname"]; ?>" readonly>
                        </li><br><br>
                        <li>
                            <label for="uId" class="liTitle">사용자 아이디</label>
                            <input type="text" id="uId" name="uId" maxlength="16" value="<?php echo $array["uid"]; ?>" readonly>
                        </li><br><br>
                        <li>
                            <label for="uBirth" class="liTitle"><span class="required">*필수입력</span>생년월일</label>
                            <input type="text" id="uBirth" name="uBirth" maxlength="6" value="<?php echo $array["birth"]; ?>">
                            <span class="input_notice">숫자 6자리만 입력하세요. ex)201224</span>
                            <br><span id="uBirth_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <label for="mobile" class="liTitle"><span class="required">*필수입력</span>전화번호</label>
                            <input type="text" id="mobile" name="mobile" maxlength="11" value="<?php echo $array["mobile"]; ?>">
                            <span class="input_notice">숫자만 입력하세요. ex)01011112222</span>
                            <br><span id="mobile_check" class="check_error"></span>
                        </li><br><br>
                        <li>
                            <?php
                                $email = $array["email"];
                                $email = explode("@","$email");
                            ?>
                            <label for="email_id" class="liTitle"><span class="required">*필수입력</span>이메일</label>
                            <input type="text" id="email_id" name="email_id" value="<?php echo $email[0]; ?>">@
                            <input type="text" id="email_dns" name="email_dns" value="<?php echo $email[1]; ?>">
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
                            <input type="text" id="uAddress" name="uAddress" size="6" readonly placeholder="우편번호" value="<?php echo $array["postalCode"]; ?>">
                            <button type="button" class="rainbowBt rainbowBt-1" onclick="search_postalCode()">검색</button><br>
                            <input type="text" class="address_input" name="addr1" id="addr1" readonly placeholder="주소" value="<?php echo $array["addr1"]; ?>"><br>
                            <input type="text" class="address_input" name="addr2" id="addr2" placeholder="상세주소" value="<?php echo $array["addr2"]; ?>">
                            <input type="text" class="address_input" name="addr3" id="addr3" placeholder="참조사항">
                        </li><br><br>
                        <li class="formBt">
                            <button type="button" onclick="javascript:history.back()" class="rainbowBt2 rainbowBt-2">이전으로</button>
                            <button type="button" href="edit.php?idx=<?php echo $idx; ?>" class="rainbowBt2 rainbowBt-2">저장하기</button>
                            <button type="button" onclick="del_mem(<?php echo $idx; ?>)" class="rainbowBt2 rainbowBt-2">회원정보 삭제</button>
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>

    </main>