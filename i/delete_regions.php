<meta charset="utf-8">
<?php
include_once(connectdb.php);

$id = $_GET['id']; // รับค่า id จาก URL
$sql = "DELETE FROM regions WHERE r_id='{$id}'"; // สร้างคำสั่ง SQL เพื่อลบข้อมูล
mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");

echo "<script>" ;
echo "window.location='a.php';" ;
echo "</script>" ;

?>