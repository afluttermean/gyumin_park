<meta charset="utf-8">


<?php
    include "../dbcon/dbcon.php";

    $uid = $_POST["uId"];

    $sql = "select uid from members where uid ='$uid';";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    mysqli_close($con);

?>

    <!DOCTYPE html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>"<?php echo $uid; ?>" 검색결과</title>

        <?php  if(!$num){ ?>
    <script>
        function return_value(){
            opener.document.getElementById("uId").value = "<?php echo $uid; ?>";
            window.close();
        };
    </script>
    <?php } ?>
    </head>
    <body>

        <?php  if($num){ ?>
            <p>
                <span>"<?php echo $uid; ?>"</span>는 사용할 수 <span class="redText">없는</span> 아이디 입니다.
            </p>
            <p>
                <a href="#" onclick="javascript:history.back();">다시 검색</a>
                <a href="#" onclick="javascript:window.close();">닫기</a>
            </p>
        <?php } else{ ?>
            <p>
                <span>"<?php echo $uid; ?>"</span>는 사용할 수 <span class="blueText">있는</span> 아이디 입니다.
            </p>
            <p>
                <a href="#" onclick="return_value()">사용하기</a>
                <a href="#" onclick="javascript:window.close();">닫기</a>
        </p>
        <?php }; ?>
        
    </body>
    </html>
