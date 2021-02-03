<meta charset="utf-8">
<?php
session_start();

include "../dbcon/dbcon.php";
$idx = $_SESSION["s_idx"];

$uname = $_POST["uName"];
$uid = $_POST["uId"];
$pwd = $_POST["pwd"];
$birth = $_POST["uBirth"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$postalCode = $_POST["uAddress"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
//$interest = $_POST["interest"];
$recommend = $_POST["recommend"];
$sms_apply =$_POST["sms_apply"];
$ad_apply =$_POST["ad_apply"];

if($pwd){
    $sql = "update members set pwd='$pwd', mobile='$mobile', email='$email', postalCode='$postalCode', addr1='$addr1', addr2='$addr2' where idx=$idx;";
} else{
    $sql = "update members set mobile='$mobile', email='$email', postalCode='$postalCode', addr1='$addr1', addr2='$addr2' where idx=$idx;";
}
$result = mysqli_query($con, $sql);
mysqli_close($con);
echo "
    <script type='text/javascript'>
        alert('수정이 완료되었습니다.');
        location.href = './mypage.php';
    </script>
";
?>