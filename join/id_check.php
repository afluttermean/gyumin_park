<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 검색하기</title>
    <style type="text/css">
        .id_notice{
            font-size:12px;
            color:#a8a7a7;
        }
    </style>
    <link href="../css/uId_check.css" rel="stylesheet">
    <script src="../jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        function id_check(frm) {
            var uId = document.getElementById("uId");
            var txt = document.querySelector("#uId_check");
            var len = uId.value.length;

            if (uId.value == "") {
                txt.textContent = "아이디를 입력하세요.";
                uId.focus();
                return false;
            };
            if ((len < 6) || (len > 16)) {
                txt.textContent = "아이디는 6~16글자만 입력할 수 있습니다."
                uId.focus();
                return false;
            };
            frm.submit();
        };
    </script>
</head>

<body>
    <form name="id_check_form" action="id_search.php" method="post">
        <fieldset>
            <legend>아이디 검색</legend>
            <p>
                <label for="uId">아이디 입력</label>
                <input type="text" id="uId" name="uId">
                <button type="button" onclick="id_check(this.form)">검색</button><span id="uId_check"></span>
                <br><span class="id_notice">*아이디는 6~12글자만 입력할 수 있습니다.</span>

            </p>
        </fieldset>
    </form>


</body>

</html>