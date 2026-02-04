<?php
    // สมมติว่าไฟล์ check_login.php มี session_start() อยู่ข้างในแล้ว
    include_once("check_login.php");
    include_once("connectdb.php");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --pastel-pink: #fce4ec;
            --pastel-blue: #e3f2fd;
            --soft-pink: #ffb7c5;
            --soft-blue: #90caf9;
        }
        body {
            background-color: #fafafa;
            font-family: 'Kanit', sans-serif;
        }
        .navbar {
            background: linear-gradient(90deg, var(--soft-blue) 0%, var(--soft-pink) 100%);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .main-container {
            margin-top: 30px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .table thead {
            background-color: var(--pastel-blue);
            color: #546e7a;
        }
        .btn-add {
            background-color: var(--soft-pink);
            color: white;
            border-radius: 20px;
            transition: 0.3s;
        }
        .btn-add:hover {
            background-color: #ff9aa2;
            color: white;
            transform: scale(1.05);
        }
        .nav-link-custom {
            color: white !important;
            font-weight: 400;
            margin: 0 10px;
            transition: 0.3s;
        }
        .nav-link-custom:hover {
            opacity: 0.8;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index2.php">🛍️ หมวย Shop Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link nav-link-custom active" href="products.php border-bottom">จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link nav-link-custom" href="orders.php">จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link nav-link-custom" href="customers.php">จัดการลูกค้า</a></li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light btn-sm text-danger ms-lg-3 px-3 rounded-pill" href="logout.php">ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container main-container">
    <div class="row mb-4 align-items-center">
        <div class="col">
            <h2 class="fw-bold text-secondary">📦 รายการสินค้าทั้งหมด</h2>
            <p class="text-muted">แอดมิน: <span class="badge bg-info text-dark"><?php echo htmlspecialchars($_SESSION['aname']); ?></span></p>
        </div>
        <div class="col-auto">
            <a href="add_product.php" class="btn btn-add px-4 shadow-sm">
                <i class="bi bi-plus-circle"></i> เพิ่มสินค้าใหม่
            </a>
        </div>
    </div>

    <div class="card p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>รหัสสินค้า</th>
                        <th>รูปภาพ</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>จำนวน</th>
                        <th class="text-center">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // ตัวอย่างการดึงข้อมูลจาก DB แบบป้องกัน Injection
                    $stmt = $conn->prepare("SELECT * FROM products ORDER BY p_id DESC");
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$row['p_id']}</td>";
                            echo "<td><img src='images/{$row['p_img']}' width='50' class='rounded'></td>";
                            echo "<td>" . htmlspecialchars($row['p_name']) . "</td>";
                            echo "<td>" . number_format($row['p_price'], 2) . " บาท</td>";
                            echo "<td>{$row['p_qty']}</td>";
                            echo "<td class='text-center'>
                                    <a href='edit_product.php?id={$row['p_id']}' class='btn btn-sm btn-outline-primary rounded-pill'><i class='bi bi-pencil'></i></a>
                                    <a href='delete_product.php?id={$row['p_id']}' class='btn btn-sm btn-outline-danger rounded-pill' onclick='return confirm(\"ยืนยันการลบ?\")'><i class='bi bi-trash'></i></a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center text-muted py-4'>ยังไม่มีข้อมูลสินค้าในระบบ 🌸</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>