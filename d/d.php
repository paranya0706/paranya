<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มรับข้อมูล - ปรัณญา ศรีบุญเพ็ง (หมวย)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-body">

            <h2 class="text-center mb-4">ฟอร์มรับข้อมูล</h2>

            <form method="post" action="">
                
                <!-- ชื่อ -->
                <div class="mb-3">
                    <label class="form-label">ชื่อ-นามสกุล</label>
                    <input type="text" name="fullname" class="form-control" required autofocus>
                </div>

                <!-- เบอร์โทร -->
                <div class="mb-3">
                    <label class="form-label">เบอร์โทร</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <!-- ส่วนสูง -->
                <div class="mb-3">
                    <label class="form-label">ส่วนสูง (ซม.)</label>
                    <input type="number" name="height" min="100" max="200" class="form-control" required>
                </div>

                <!-- ที่อยู่ -->
                <div class="mb-3">
                    <label class="form-label">ที่อยู่</label>
                    <textarea name="address" class="form-control" rows="3"></textarea>
                </div>

                <!-- วันเกิด -->
                <div class="mb-3">
                    <label class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" name="birthday" class="form-control">
                </div>

                <!-- สีที่ชอบ -->
                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ</label>
                    <input type="color" name="color" class="form-control form-control-color">
                </div>

                <!-- สาขาวิชา -->
                <div class="mb-3">
                    <label class="form-label">สาขาวิชา</label>
                    <select name="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <!-- ปุ่มกด -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-warning">ยกเลิก</button>
                    <button type="button" class="btn btn-info text-white" onclick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
                    <button type="button" class="btn btn-dark" onmouseover="alert('อ่านทำไม');">Hello</button>
                    <button type="button" class="btn btn-secondary" onclick="window.print();">พิมพ์</button>
                </div>

            </form>

        </div>
    </div>

    <hr class="my-4">

    <!-- ส่วน PHP แสดงผล -->
    <?php
    if (isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "<div class='alert alert-success mt-3'>";
        echo "ชื่อ-สกุล: ".$fullname."<br>";
        echo "เบอร์โทร: ".$phone."<br>";
        echo "ส่วนสูง: ".$height." ซม.<br>";
        echo "ที่อยู่: ".$address."<br>";
        echo "วันเดือนปีเกิด: ".$birthday."<br>";
        echo "สีที่ชอบ: <div style='background-color:{$color}; width:150px; height:40px;' class='border rounded mt-1'></div>";
        echo "สาขาวิชา: ".$major."<br>";
        echo "</div>";
    }
    ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
