<meta charset="utf-8">
<?php
include_once("connectdb.php");

$id = $_GET[""];
$sql = "DELETE FROM regions WHEHE r_id='{id}'";
mysqli_query($conn.$sql) or die ("ลบข้อมูลไม่ได้")ว

echo "<script>";
echo "window.location='a.php';";
echo "</scrip>";

?>
