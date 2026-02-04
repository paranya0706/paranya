<?php
    // สมมติว่า check_login.php มี session_start() อยู่ข้างในแล้ว
    include_once("check_login.php");
    // ตัวอย่างการเรียกไฟล์เชื่อมต่อฐานข้อมูล
    // include_once("connect.php"); 
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(90deg, #ffc1e3 0%, #b3e5fc 100%);
            border-bottom: 3px solid #fff;
        }
        .content-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.2);
        }
        .btn-add {
            background-color: #ff80ab;
            color: white;
            border-radius: 50px;
            transition: 0.3s;
        }
        .btn-add:hover {
            background-color: #f06292;
            color: white;
            transform: scale(1.05);
        }
        .table thead {
            background-color: #e1f5fe;
            color: #039be5;
        }
        .img-product {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="admin_home.php">PRANYA SHOP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="products.php">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php">จัดการลูกค้า</a></li>
                <li class="nav-item"><a class="btn btn-light btn-sm rounded-pill ms-lg-3" href="logout.php">ออกระบบ</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="content-card p-4 p-md-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-secondary">📦 รายการสินค้าทั้งหมด</h2>
            <a href="product_add.php" class="btn btn-add px-4">
                <i class="bi bi-plus-circle-fill"></i> เพิ่มสินค้าใหม่
            </a>
        </div>

        <div class="table-responsive">
            <table class="table align-middle table-hover">
                <thead>
                    <tr>
                        <th width="10%">รูปภาพ</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>คงเหลือ</th>
                        <th width="20%" class="text-center">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /* $sql = "SELECT * FROM products";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)) { 
                    */
                    ?>
                    <tr>
                        <td><img src="https://placehold.co/100x100/fce4ec/ff80ab?text=Product" class="img-product"></td>
                        <td><span class="fw-medium text-dark">เซตครีมบำรุงพาสเทล</span></td>
                        <td>฿590.00</td>
                        <td><span class="badge bg-success-subtle text-success rounded-pill">12 ชิ้น</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-info rounded-pill me-1"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-sm btn-outline-danger rounded-pill"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    <?php // } ?>
                </tbody>
            </table>
        </div>
        
        <div class="mt-3 text-end">
            <small class="text-muted">ล็อกอินโดย: <span class="text-primary"><?php echo htmlspecialchars($_SESSION['aname']); ?></span></small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>