<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ข้อมูลใบสมัครงาน</title>

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

    h3 {
        color: #b05ac9;
        font-weight: 700;
    }

    label {
        color: #8a53a3;
        font-weight: 600;
    }
</style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">ข้อมูลใบสมัครงาน</h3>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            echo "<p><strong>ตำแหน่งที่สมัคร:</strong> " . $_POST['position'] . "</p>";
            echo "<p><strong>คำนำหน้า:</strong> " . $_POST['title'] . "</p>";
            echo "<p><strong>ชื่อ - นามสกุล:</strong> " . $_POST['fullname'] . "</p>";
            echo "<p><strong>วันเดือนปีเกิด:</strong> " . $_POST['birthday'] . "</p>";
            echo "<p><strong>ระดับการศึกษา:</strong> " . $_POST['education'] . "</p>";
            echo "<p><strong>ความสามารถพิเศษ:</strong> " . nl2br($_POST['skills']) . "</p>";
            echo "<p><strong>ประสบการณ์ทำงาน:</strong> " . nl2br($_POST['experience']) . "</p>";

        } else {
            echo "<div class='alert alert-danger'>ไม่พบข้อมูลที่ส่งมา</div>";
        }
        ?>

        <a href="index.php" class="btn btn-primary mt-3">กลับไปหน้ากรอกข้อมูล</a>
    </div>

</div>

</body>
</html>
