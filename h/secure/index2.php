<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - ปรัณญา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(135deg, #fce4ec 0%, #e3f2fd 100%);
            min-height: 100vh;
        }
        .admin-card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .btn-pastel-blue {
            background-color: #bbdefb;
            color: #444;
            border: none;
            transition: all 0.3s;
        }
        .btn-pastel-blue:hover {
            background-color: #90caf9;
            transform: translateY(-2px);
        }
        .btn-pastel-pink {
            background-color: #f8bbd0;
            color: #444;
            border: none;
            transition: all 0.3s;
        }
        .btn-pastel-pink:hover {
            background-color: #f48fb1;
            transform: translateY(-2px);
        }
        .nav-link-custom {
            text-decoration: none;
            display: block;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 15px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card admin-card p-4">
                <div class="text-center mb-4">
                    <h1 class="h3 fw-bold text-secondary">หน้าหลักแอดมิน - ปรัณญา</h1>
                    <span class="badge bg-white text-primary border border-primary-subtle px-3 py-2 rounded-pill">
                        ✨ สวัสดีคุณ: <?php echo htmlspecialchars($_SESSION['aname']); ?>
                    </span>
                </div>

                <div class="menu-list">
                    <a href="products.php" class="nav-link-custom btn-pastel-blue text-center">
                        📦 จัดการสินค้า
                    </a>
                    <a href="orders.php" class="nav-link-custom btn-pastel-pink text-center">
                        🛒 จัดการออเดอร์
                    </a>
                    <a href="customers.php" class="nav-link-custom btn-pastel-blue text-center">
                        👥 จัดการลูกค้า
                    </a>
                    <hr class="my-4 text-muted">
                    <a href="logout.php" class="btn btn-outline-danger w-100 rounded-pill">
                        🚪 ออกจากระบบ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="