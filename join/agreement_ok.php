
<meta charset="utf-8">
<?php 
include "../dbcon/dbcon.php";

$chk = $_POST['chk'];
$chk_array = array($chk);
foreach($chk_array as $value){
    $chk_result = implode("|",$value);
}

$sql = "insert into members(reg_agree) values('$chk_result');";


$result = mysqli_query($con,$sql);
mysqli_close($con);

echo "
<script type='text/javascript'>
location.href = 'join.php';
</script>
"

?>