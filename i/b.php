<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรัณญา ศรีบุญเพ็ง (หมวย)</title>
</head>

<body>
<h1>งาน i -- ปรัณญา ศรีบุญเพ็ง (หมวย)</h1>

<form method="post" action="" encctype="multipart/form-data">
    ชื่อจังหวัด <input type="text" name="pname" autofocus required> <br>
    รูปภาพ<input type="file" name="pimaage" reguired> <br>
    
    ภาค
    <select name="rid">
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM provice";
$rs = mysqli_query($conn,$sql3);
while($data = mysqli_fetch_array($rs3)){
?>
         <option value="<?php echo $data3['r_id']; ?>"><?php echo $data3['r_name']; ?></option>
<?php } ?>     
     </select>
     <br>
     
    <button type="submit" name="Submit"> บันทึก </button>
</form><br><br>

<?php
if(isset($_POST['Submit'])){
    include_once("connectdb.php");
    $rname = $_POST['pname'];
	$ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);
	$rid = $_POST['rid'];
	
    $sql2 = "INSERT INTO  `provinces` VALUES (NULL, '{$pname}','{ext}','{rname}')";
    mysqli_query($conn,$sql2) or die ("เพิ่มข้อมูลไม่ได้");
	$pid = mysqli_insert_id($conn);
	copy($_FILES['pimage']['tmp_name'], "image/".$pid.".");
}
?>

<table border="1">
    <tr>
        <th>รหัสจังหวัด</th>
        <th>ชื่อจังหวัด</th>
        <th>รูป</th>
        <th>ลบ</th>
    </tr>
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM provice";
$rs = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($rs)){
?>
    <tr>
        <td><?php echo $data['p_id']; ?></td>
        <td><?php echo $data['p_name']; ?></td>
        <td><img src="images/<?php echo $data['p_id']; ?>.<?php echo $data['p_name']; ?>jpg" width="140"></td>
        <td width="80" align="center"><a href="delete_regions.php?id=<?php echo $data['p_id']; ?>" onClick="return confirm('ยืนยันการลบ?');"><img src="images/delete.jpg" width="20"></a></td>
    </tr>
<?php } ?>
</table>

<?php
mysqli_close($conn);
?>
</body>
</html>