<?php
    session_start();
    // ตรวจสอบสิทธิ์การเข้าใช้งาน
    if(empty($_SESSION['aid'])) {
        echo "<div style='font-family:Kanit; text-align:center; margin-top:50px;'>";
        echo "<h3>Access Denied! กำลังกลับไปหน้าล็อคอิน...</h3>";
        echo "</div>";
        echo "<meta http-equiv='refresh' content='2; url=index.php'>"; // เติม ; ที่หายไป
        exit;
    }   
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #fdfcf0; /* สีครีมอ่อนๆ ตัดกับพาสเทล */
        }
        .navbar {
            background: linear-gradient(90deg, #fce4ec 0%, #e3f2fd 100%);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .nav-link {
            color: #666 !important;
            font-weight: 500;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ff80ab !important; /* ชมพูเข้มขึ้นเวลา Hover */
        }
        .main-container {
            background: white;
            border-radius: 25px;
            padding: 30px;
            margin-top: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }
        .page-title {
            border-left: 5px solid #f8bbd0;
            padding-left: 15px;
            color: #555;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand fw-bold text-secondary" href="admin_home.php">PRANYA ADMIN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="products.php">📦 จัดการสินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="orders.php">🛒 จัดการออเดอร์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customers.php">👥 จัดการลูกค้า</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-outline-danger btn-sm rounded-pill px-3" href="logout.php">ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="main-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="page-title">จัดการออเดอร์</h2>
            <div class="text-muted">
                <small>ผู้ใช้งาน: </small>
                <span class="badge bg-info-subtle text-info-emphasis rounded-pill">
                    <?php echo htmlspecialchars($_SESSION['aname']); ?>
                </span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>เลขที่ออเดอร์</th>
                        <th>ชื่อลูกค้า</th>
                        <th>วันที่สั่งซื้อ</th>
                        <th>ราคาสุทธิ</th>
                        <th>สถานะ</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ORD-001</td>
                        <td>สมหญิง จริงใจ</td>
                        <td>04/02/2026</td>
                        <td>1,250.00</td>
                        <td><span class="badge rounded-pill bg-warning text-dark">รอชำระเงิน</span></td>
                        <td>
                            <button class="btn btn-sm btn-pastel-blue" style="background-color: #e3f2fd;">ดูรายละเอียด</button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>