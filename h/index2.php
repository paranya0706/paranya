<?php
    session_start();
    // ตรวจสอบสิทธิ์การเข้าใช้งาน
    if(empty($_SESSION['aid'])) {
        echo "<script>
                alert('Access Denied: กรุณาเข้าสู่ระบบก่อน');
                window.location='index.php';
              </script>";
        exit;
    }   
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background-color: #f0faff; /* ฟ้าพาสเทลอ่อน */
            font-family: 'Kanit', sans-serif;
        }
        .navbar {
            background-color: #ffcce0 !important; /* ชมพูพาสเทล */
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .admin-card {
            border: none;
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            overflow: hidden;
        }
        .admin-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .icon-box {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .bg-pastel-blue { background-color: #b3e5fc; color: #0277bd; }
        .bg-pastel-pink { background-color: #f8bbd0; color: #c2185b; }
        .bg-pastel-purple { background-color: #e1bee7; color: #7b1fa2; }
        .bg-pastel-orange { background-color: #ffe0b2; color: #ef6c00; }
        
        .welcome-text {
            color: #5c6bc0;
            font-weight: 500;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg mb-5">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="#">💖 Admin Panel</a>
        <div class="d-flex align-items-center">
            <span class="me-3 welcome-text">
                <i class="bi bi-person-circle"></i> แอดมิน: <?php echo htmlspecialchars($_SESSION['aname']); ?>
            </span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-pill">ออกจากระบบ</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-secondary">จัดการระบบหลังบ้าน</h1>
        <p class="text-muted">ยินดีต้อนรับคุณ ปรัณญา สู่ระบบจัดการร้านค้า</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <a href="products.php" class="card admin-card h-100 text-center p-4 shadow-sm bg-pastel-blue">
                <div class="icon-box"><i class="bi bi-box-seam"></i></div>
                <h4 class="fw-bold">จัดการสินค้า</h4>
                <p class="mb-0">เพิ่ม ลบ แก้ไข รายการสินค้า</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="orders.php" class="card admin-card h-100 text-center p-4 shadow-sm bg-pastel-pink">
                <div class="icon-box"><i class="bi bi-cart-check"></i></div>
                <h4 class="fw-bold">จัดการออเดอร์</h4>
                <p class="mb-0">ตรวจสอบสถานะการสั่งซื้อ</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="customers.php" class="card admin-card h-100 text-center p-4 shadow-sm bg-pastel-purple">
                <div class="icon-box"><i class="bi bi-people"></i></div>
                <h4 class="fw-bold">จัดการลูกค้า</h4>
                <p class="mb-0">ดูข้อมูลสมาชิกและประวัติ</p>
            </a>
        </div>
    </div>

    <footer class="mt-5 text-center text-muted py-4">
        &copy; 2026 ปรัณญา ศรีบุญเพ็ง - Admin System
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>