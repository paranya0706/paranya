<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd 0%, #fce4ec 100%);
            font-family: 'Kanit', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }
        .btn-pastel {
            background-color: #ffb7c5;
            border: none;
            color: white;
            transition: 0.3s;
        }
        .btn-pastel:hover {
            background-color: #ff9aa2;
            color: white;
            transform: translateY(-2px);
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #dee2e6;
        }
        .form-control:focus {
            border-color: #bbdefb;
            box-shadow: 0 0 0 0.25rem rgba(187, 222, 251, 0.25);
        }
    </style>
</head>
<body>

<div class="login-card">
    <h3 class="text-center mb-4" style="color: #90caf9;">ยินดีต้อนรับ ✨</h3>
    <h5 class="text-center mb-4 text-secondary">เข้าสู่ระบบ - ปรัณญา</h5>

    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="auser" class="form-control" placeholder="ระบุชื่อผู้ใช้งาน" required autofocus>
        </div>
        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="apwd" class="form-control" placeholder="ระบุรหัสผ่าน" required>
        </div>
        <button type="submit" name="Submit" class="btn btn-pastel w-100 py-2 fw-bold">LOGIN 🌸</button>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        session_start();
        include_once("connectdb.php"); // ต้องแก้ไฟล์นี้ให้เป็นแบบ PDO หรือ MySQLi 

        $user = $_POST['auser'];
        $pwd = $_POST['apwd'];

        // ป้องกัน SQL Injection ด้วย Prepared Statement
        $stmt = $conn->prepare("SELECT * FROM admin WHERE a_username = ? LIMIT 1");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows === 1){
            $data = $result->fetch_assoc();
            
            // ตรวจสอบรหัสผ่านที่เข้ารหัส (ใช้ password_verify)
            if (password_verify($pwd, $data['a_password'])) {
                $_SESSION['aid'] = $data['a_id'];
                $_SESSION['aname'] = $data['a_name'];
                echo "<script>window.location='index2.php';</script>";
            } else {
                echo "<div class='alert alert-danger mt-3 text-center' style='border-radius:10px;'>รหัสผ่านไม่ถูกต้อง!</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-3 text-center' style='border-radius:10px;'>ไม่พบชื่อผู้ใช้งานนี้</div>";
        }
    }
    ?>
</div>

</body>
</html>