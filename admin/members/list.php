<?php
    include "../inc/user_check.php";
    include "../../dbcon/dbcon.php";

    $sql = "select * from members;";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    $list_num = 10;


    $page_num = 5;

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

    <?php if($s_uid){ ?>
    <script>
        function del_mem(idx){
        var rt = confirm("정말 탈퇴하시겠습니까?");
        if(rt){
            location.href = "delete_ok.php?idx"+idx;
            };
        };
        function logout_check(){
            var rt = confirm("정말 로그아웃하시겠습니까?");
            if(rt){
                location.href = "login/logout_ok.php";
            };
        };
    </script>
    <?php } ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원관리 페이지</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="../../css/admin_memlist.css" type="text/css" rel="stylesheet">
        <script src="../../jquery-3.5.1.min.js"></script>
    </head>
    <script>
        function del_mem(idx){
            var rt = confirm("회원정보를 삭제하시겠습니까?");
            if(rt){
                location.href = "delete_ok.php?idx="+idx;
            };
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
                <h1><a href="#./admin_index.php">닌텐도</a></h1>
            </div>
        </header>
        <main>
            <h2>회원 관리</h2>
            <div class="nameWrap">
                <p class="u_name">"<span class="boldText"><?php echo $s_uname; ?>"</span>님 환영합니다.</p>
            </div>
            <div class="formWrap">
                <div class="redPoint"></div>
                <div class="admin_menu"></div>
                <div class="main_content">
                    <div class="adminmenuWrap">
                        <div class="adminMenu">
                            <a href="../admin_index.php" class="backPage">관리자 페이지</a>
                            <a href="#" onclick="logout_check()">로그아웃</a>
                        </div>
                    </div>
                    <div class="tableWrap">
                        <p>
                            총 <?php echo $num; ?>명
                        </p>
                        <table id="membersList">   
                            <thead>
                                <tr class="member_title">
                                    <th style="width: 5px;">번호</th>
                                    <th style="width: 60px;">이름</th>
                                    <th style="width: 100px;">아이디</th>
                                    <th style="width: 100px;">생년월일</th>
                                    <th style="width: 60px;">이메일</th>
                                    <th>전화번호</th>
                                    <th>우편번호</th>
                                    <th>기본주소</th>
                                    <th>상세주소</th>
                                    <th>sms 수신동의</th>
                                    <th>email 수신동의</th>
                                    <th style="width: 100px;">가입일</th>
                                    <th style="width: 100px;">설정</th>
                                </tr>
                            </thead>
                            
                            <?php
                                $start = ($page - 1) * $list_num;

                                $sql = "select * from members limit $start, $list_num;";

                                $result = mysqli_query($con, $sql);
                            
                                $cnt = $start + 1;
                                while($array = mysqli_fetch_array($result)){  
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td><?php echo $array["uname"]; ?></td>
                                    <td><?php echo $array["uid"]; ?></td>
                                    <td><?php echo $array["birth"]; ?></td>
                                    <td><?php echo $array["email"]; ?></td>
                                    <td><?php echo $array["mobile"]; ?></td>
                                    <td><?php echo $array["postalCode"]; ?></td>
                                    <td><?php echo $array["addr1"]; ?></td>
                                    <td><?php echo $array["addr2"]; ?></td>
                                    <td><?php echo $array["sms_apply"]; ?></td>
                                    <td><?php echo $array["ad_apply"]; ?></td>
                                    <td><?php echo $array["reg_date"]; ?></td>
                                    <td>
                                        <a href="./admin_view.php?idx=<?php echo $array["idx"]; ?>">보기</a>
                                        <a href="#none" onclick="del_mem(<?php echo $array['idx']; ?>)">삭제</a>
                                    </td>
                                </tr>
                            </tbody>
                            
                            <?php  
                                $cnt++;
                            };  
                            ?>
                        </table>
                    </div>
                    <p class="pagingTitle">
                        <?php
                            if($page <= 1){
                        ?>
                        <a href="list.php?page=1" class="pagingBack">이전</a>
                        <?php
                            } else{
                        ?>
                        <a href="list.php?page=<?php echo ($page-1); ?>" class="pagingBack">이전</a>
                        <?php
                            };
                        ?>
                        
                        <?php
                        for( $print_page = $s_pageNum;  $print_page <= $e_pageNum;  $print_page++){
                        ?>
                            <a href="list.php?page=<?php echo $print_page; ?>" class="paging"><?php echo $print_page; ?></a>
                        <?php
                        };
                        ?>
                        
                        <?php
                            if($page >= $total_page){
                        ?>
                        <a href="list.php?page=<?php echo $total_page; ?>" class="pagingNext">다음</a>
                        <?php
                            } else{
                        ?>
                        <a href="list.php?page=<?php echo ($page+1); ?>" class="pagingNext">다음</a>
                        <?php
                            };
                        ?>
                        
                    </p>
                </div>
            </div>

        </main>
        <footer>


        </footer>
    </body>

</html>