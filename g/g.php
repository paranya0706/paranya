<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>ยอดขายรายเดือน - ปรัณญา ศรีบุญเพ็ง (หมวย)</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #fce4ec; /* พื้นหลังสีชมพูอ่อนมาก */
            margin: 0;
            padding: 40px 20px;
            color: #444;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #d81b60; /* สีชมพูเข้ม */
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        /* ส่วนจัดวางกราฟให้ขนานกัน */
        .chart-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            flex: 1;
            min-width: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ส่วนตาราง */
        .table-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f06292; /* สีชมพู Header */
            color: white;
            padding: 15px;
            font-size: 1.1rem;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #fce4ec;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:nth-child(even) {
            background-color: #fff9fa;
        }

        .text-bold {
            font-weight: bold;
            color: #d81b60;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ยอดขายรายเดือน</h1>

    <?php
        include_once("connectdb.php");
        
        // ดึงข้อมูลยอดขาย
        $sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
        $rs = mysqli_query($conn, $sql);
        
        $labels = [];
        $values = [];
        $tableData = [];

        while ($data = mysqli_fetch_array($rs)) {
            $monthLabel = "เดือน " . $data['Month'];
            $labels[] = $monthLabel;
            $values[] = (float)$data['Total_Sales'];
            $tableData[] = $data; // เก็บไว้แสดงผลในตาราง
        }
    ?>

    <div class="chart-section">
        <div class="card">
            <canvas id="barChart" style="max-height: 400px;"></canvas>
        </div>
        <div class="card">
            <canvas id="donutChart" style="max-height: 400px;"></canvas>
        </div>
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>เดือน</th>
                    <th>ยอดขาย (บาท)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tableData as $row): ?>
                <tr>
                    <td>เดือน <?php echo $row['Month']; ?></td>
                    <td align="right" style="padding-right: 20%;"><?php echo number_format($row['Total_Sales'], 0); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($values); ?>;

    // พาเลทสีตามรูปภาพ (พาสเทลสดใส)
    const colorPalette = [
        '#f48fb1', '#ce93d8', '#90caf9', '#81d4fa', '#80deea', '#a5d6a7', 
        '#e6ee9c', '#fff59d', '#ffcc80', '#ffab91', '#bcaaa4', '#eeeeee'
    ];

    // ข้อมูลสำหรับกราฟ
    const chartData = {
        labels: labels,
        datasets: [{
            label: 'ยอดขาย',
            data: dataValues,
            backgroundColor: colorPalette,
            borderWidth: 0,
            borderRadius: 5 // ความมนของกราฟแท่ง
        }]
    };

    // กราฟแท่ง
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true, grid: { color: '#f0f0f0' } },
                x: { grid: { display: false } }
            }
        }
    });

    // กราฟโดนัท
    new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: chartData,
        options: {
            responsive: true,
            cutout: '60%', // ทำให้เป็นวงแหวน
            plugins: {
                legend: { position: 'bottom', labels: { boxWidth: 12, font: { size: 11 } } }
            }
        }
    });
</script>

</body>
</html>