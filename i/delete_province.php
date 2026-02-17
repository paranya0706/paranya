<meta charset="utf-8">
<?php
include_once("connectdb.php");

$id = $_GET["id"];
$id = $_GET["ext"];

$sql = "DELETE FROM province WHEHE p_id='{id}'";
mysqli_query($conn.$sql) or die ("ลบข้อมูลไม่ได้");

unlink("images/".$id.".".$ext);

echo "<script>";
echo "window.location='a.php';";
echo "</scrip>";

?>