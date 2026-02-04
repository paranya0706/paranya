<?php
    include_once("check_login.php");
    // include_once("connect.php"); 
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f0f4f8; /* สีพื้นนุ่มๆ */
            background-image: radial-gradient(#ffebee 1px, transparent 1px), radial-gradient(#e1f5fe 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .navbar {
            background: linear-gradient(90deg, #f8bbd0 0%, #b3e5fc 100%);
            border-bottom: 2px solid #fff;
        }
        .customer-card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 25px;
            backdrop-filter: blur(5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .avatar-circle {
            width: 45px;
            height: 45px;
            background-color: #fce4ec;
            color: #f06292;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
        }
        .table thead th {
            border-top: none;
            background-color: #fdf2f8;
            color: #d81b60;
        }
        .status-active {
            background-color: #e8f5e9;
            color: #2e7d32;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold text-secondary" href="admin_home.php">
            <i class="bi bi-heart-fill text-danger"></i> PRANYA
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-primary" href="customers.php">จัดการลูกค้า</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-outline-dark btn-sm rounded-pill" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="customer-card p-4">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="fw-bold mb-0">👥 รายชื่อลูกค้า</h2>
                <p class="text-muted mb-0">ดูแลข้อมูลสมาชิกที่น่ารักของคุณ</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <div class="input-group rounded-pill overflow-hidden border">
                    <input type="text" class="form-control border-0" placeholder="ค้นหาลูกค้า...">
                    <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>ลูกค้า</th>
                        <th>อีเมล / เบอร์โทรศัพท์</th>
                        <th>วันที่สมัคร</th>
                        <th class="text-center">สถานะ</th>
                        <th class="text-center">เครื่องมือ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">ป</div>
                                <div>
                                    <div class="fw-bold">ปรัญญา ใจดี</div>
                                    <small class="text-muted">ID: #CUS-001</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>pranya@example.com</div>
                            <small class="text-muted">081-234-5678</small>
                        </td>
                        <td>04 ก.พ. 2026</td>
                        <td class="text-center">
                            <span class="badge rounded-pill status-active px-3">ปกติ</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group shadow-sm rounded-pill">
                                <button class="btn btn-white btn-sm border-end text-primary"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-white btn-sm text-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center">
            <span class="text-muted small">ล็อกอิน: <?php echo htmlspecialchars($_SESSION['aname']); ?></span>
            <nav>
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link rounded-circle me-2" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link rounded-circle me-2" href="#">1</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">Next</a></li>
              </ul>
            </nav>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>