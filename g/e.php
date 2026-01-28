<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales Analysis Dashboard - ปรัณญา</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f7f9fc; color: #555; }
        
        /* Header ไล่เฉดสีชมพู-ม่วงพาสเทล */
        .main-header { 
            background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%); 
            color: white; 
            padding: 40px 0; 
            margin-bottom: 30px; 
            border-radius: 0 0 40px 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .card { 
            border: none; 
            border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.03);
            height: 100%;
        }

        .card-title { color: #444; font-weight: 600; margin-bottom: 20px; }
        
        /* ตกแต่งตาราง */
        .table thead { background-color: #fff5f8; }
        .dot { height: 12px; width: 12px; border-radius: 50%; display: inline-block; margin-right: 10px; }
        
        /* ปรับขนาดกราฟ */
        .chart-container { position: relative; height: 320px; width: 100%; }
    </style>
</head>

<body>

<div class="main-header text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">Sales Analysis Dashboard</h1>
        <p class="lead">จัดทำโดย: ปรัณญา ศรีบุญเพ็ง (หมวย)</p>
    </div>
</div>

<div class="container-fluid px-4 mb-5">
    <div class="row g-4">
        
        <div class="col-lg-4">
            <div class="card p-4">
                <h5 class="card-title">สรุปยอดขายรายประเทศ</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-muted">
                                <th>ประเทศ</th>
                                <th class="text-end">ยอดรวม</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once("connectdb.php");
                        $sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country ORDER BY total DESC";
                        $rs = mysqli_query($conn, $sql);
                        
                        $labels = [];
                        $values = [];
                        // ชุดสีพาสเทลสำหรับจุดหน้าชื่อประเทศ
                        $dotColors = ['#ff99cc', '#99e6b3', '#ffd966', '#ffad99', '#b3b3ff', '#99e6e6', '#cc99ff'];
                        $i = 0;

                        while ($data = mysqli_fetch_array($rs)) {
                            $labels[] = $data['p_country'];
                            $values[] = (float)$data['total'];
                            $currentColor = $dotColors[$i % count($dotColors)];
                            echo "<tr>
                                    <td><span class='dot' style='background-color:{$currentColor}'></span>{$data['p_country']}</td>
                                    <td class='text-end fw-bold text-dark'>".number_format($data['total'])."</td>
                                  </tr>";
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card p-4">
                <h5 class="card-title text-center">เปรียบเทียบยอดขาย (Bar)</h5>
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card p-4">
                <h5 class="card-title text-center">สัดส่วน (Pie)</h5>
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($values); ?>;
    
    // โทนสีพาสเทลสดใส (Soft Pastel Palette)
    const pastelColors = [
        '#FFB7CE', // ชมพูพาสเทล
        '#77DD77', // เขียวพาสเทล
        '#FDFD96', // เหลืองพาสเทล
        '#FFB347', // ส้มพาสเทล
        '#B39EB5', // ม่วงพาสเทล
        '#84B6F4', // ฟ้าพาสเทล
        '#AEC6CF'  // เทาฟ้าพาสเทล
    ];

    const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { 
                position: 'bottom',
                labels: { font: { family: 'Sarabun', size: 12 } }
            }
        }
    };

    // กราฟแท่ง (Bar Chart)
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: pastelColors,
                borderRadius: 10, // ทำแท่งให้มนๆ ดูนุ่มนวล
                barPercentage: 0.6
            }]
        },
        options: {
            ...chartOptions,
            plugins: { ...chartOptions.plugins, legend: { display: false } },
            scales: {
                y: { beginAtZero: true, grid: { color: '#f0f0f0' } },
                x: { grid: { display: false } }
            }
        }
    });

    // กราฟวงกลม (Donut Style แบบในรูป)
    new Chart(document.getElementById('pieChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: pastelColors,
                borderWidth: 2,
                borderColor: '#ffffff'
            }]
        },
        options: {
            ...chartOptions,
            cutout: '60%' // ทำให้เป็นวงกลมมีรูตรงกลางแบบในรูป
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>