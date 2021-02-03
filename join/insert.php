<meta charset="utf-8">
<?php
include "../dbcon/dbcon.php";

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
$interest = $_POST["interest"];
$int_array = array($interest);
foreach($int_array as $value){
    $int_result = implode("|",$value);
}
$interest_etc = $_POST["interest_etc"];
$int_put = $interest_etc[0]."".$interest_etc[1];

$int_com = $int_result."".$int_put;
$recommend = $_POST["recommend"];


$ad_apply =$_POST["ad_apply"];
$sms_ad = $ad_apply[0];
$email_ad = $ad_apply[1];
$ad = $sms_ad."|".$email_ad;


$reg_date = date("Y-m-d");

$sql="select * from members order by idx desc;";
$result=mysqli_query($con,$sql);
$array = mysqli_fetch_array($result);
$g_idx=$array['idx'];


$c_sql = "update members set uname='$uname', uid='$uid', pwd='$pwd', birth='$birth', 
                        email='$email', mobile='$mobile' , postalCode='$postalCode', 
                        addr1='$addr1', addr2='$addr2', 
                        interest='$int_com',
                        recommend='$recommend', ad_apply='$ad', reg_date='$reg_date' 
                        where idx='$g_idx';";


$result=mysqli_query($con,$c_sql);
mysqli_close($con);

echo "
<script type='text/javascript'>
location.href = 'welcome.php';
</script>
"

?>


