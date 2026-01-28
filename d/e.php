<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครงาน - บริษัท หมวยรับทรัพย์ไม่ จำกัด</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #ffd6e7, #e3d7ff, #d7f2ff);
        background-size: 300% 300%;
        animation: pastelBG 12s ease infinite;
    }

    @keyframes pastelBG {
        0% {background-position: 0% 50%;}
        50% {background-position: 100% 50%;}
        100% {background-position: 0% 50%;}
    }

    .card {
        background: #ffffffcc;
        backdrop-filter: blur(8px);
        border-radius: 20px;
    }

    h2, h5 {
        color: #b05ac9; /* ม่วงพาสเทล */
    }

    .btn-primary {
        background-color: #ff9ecb;
        border-color: #ff9ecb;
    }
    .btn-primary:hover {
        background-color: #ff7fb6;
        border-color: #ff7fb6;
    }

    .btn-secondary {
        background-color: #b3c7f7;
        border-color: #b3c7f7;
    }
    .btn-secondary:hover {
        background-color: #94aef0;
        border-color: #94aef0;
    }

    label {
        color: #8a53a3;
        font-weight: 600;
    }

    .form-control, .form-select {
        border-radius: 12px;
        border: 1px solid #d7c5ff;
    }

</style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow-lg border-0 p-4">
        <div class="card-body">

            <h2 class="text-center mb-3">แบบฟอร์มสมัครงาน</h2>
            <h5 class="text-center mb-4">
                บริษัท หมวยรับทรพย์ไม่ จำกัด
            </h5>

            <form method="post" action="f.php">

                <!-- ตำแหน่ง -->
                <div class="mb-3">
                    <label class="form-label">ตำแหน่งที่ต้องการสมัคร</label>
                    <select name="position" class="form-select" required>
                        <option value="">-- เลือกตำแหน่งงาน --</option>
                        <option>เจ้าหน้าที่การตลาด</option>
                        <option>โปรแกรมเมอร์</option>
                        <option>นักออกแบบกราฟิก</option>
                        <option>เจ้าหน้าที่ทรัพยากรบุคคล</option>
                        <option>เจ้าหน้าที่บัญชี</option>
                    </select>
                </div>

                <!-- คำนำหน้า -->
                <div class="mb-3">
                    <label class="form-label">คำนำหน้าชื่อ</label>
                    <select name="title" class="form-select" required>
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                    </select>
                </div>

                <!-- ชื่อ -->
                <div class="mb-3">
                    <label class="form-label">ชื่อ - นามสกุล</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <!-- วันเกิด -->
                <div class="mb-3">
                    <label class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>

                <!-- การศึกษา -->
                <div class="mb-3">
                    <label class="form-label">ระดับการศึกษา</label>
                    <select name="education" class="form-select" required>
                        <option>มัธยมศึกษาตอนปลาย</option>
                        <option>ปวช.</option>
                        <option>ปวส.</option>
                        <option>ปริญญาตรี</option>
                        <option>ปริญญาโท</option>
                    </select>
                </div>

                <!-- ความสามารถพิเศษ -->
                <div class="mb-3">
                    <label class="form-label">ความสามารถพิเศษ</label>
                    <textarea name="skills" class="form-control" rows="3"
                    placeholder="ระบุความสามารถพิเศษ เช่น ใช้โปรแกรมออกแบบได้ เขียนโปรแกรมได้ ฯลฯ"></textarea>
                </div>

                <!-- ประสบการณ์ -->
                <div class="mb-3">
                    <label class="form-label">ประสบการณ์ทำงาน</label>
                    <textarea name="experience" class="form-control" rows="3"
                    placeholder="ระบุประสบการณ์ทำงาน (ถ้ามี)"></textarea>
                </div>

                <!-- ปุ่ม -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary px-4">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-secondary px-4">ล้างข้อมูล</button>
                </div>

            </form>

        </div>
    </div>

    <hr class="my-4">

    <!-- PHP แสดงข้อมูล -->
    <?php
    if (isset($_POST['Submit'])){
        echo "<div class='alert alert-success mt-3'><h5>✓ ส่งใบสมัครสำเร็จ</h5>";
        echo "ตำแหน่ง: ".$_POST['position']."<br>";
        echo "คำนำหน้า: ".$_POST['title']."<br>";
        echo "ชื่อ-สกุล: ".$_POST['fullname']."<br>";
        echo "วันเกิด: ".$_POST['birthday']."<br>";
        echo "ระดับการศึกษา: ".$_POST['education']."<br>";
        echo "ความสามารถพิเศษ: ".$_POST['skills']."<br>";
        echo "ประสบการณ์: ".$_POST['experience']."<br>";
        echo "</div>";
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
