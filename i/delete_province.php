<meta charset="utf-8">
<?php
include_once(connectdb.php); // เรียกไฟล์เชื่อมต่อฐานข้อมูล

$id = $_GET['id']; // รับค่าจาก URL (GET)
$ext = $_GET['ext']; // รับค่าจาก URL (GET)

$sql = "DELETE FROM provices WHERE p_id='{$id}'"; // คำสั่ง SQL ลบข้อมูล
// เป็นคำสั่ง ลบข้อมูลในตาราง provices โดยลบแถวที่ p_id ตรงกับ $id
mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้"); // รันคำสั่ง SQL

unlink("images/".$id.".".$ext); // ลบไฟล์รูปภาพ

echo "<script>" ;
echo "window.location='b.php';" ; // เปลี่ยนหน้าไปยัง b.php
echo "</script>" ;

?>