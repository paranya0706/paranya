<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มรับข้อมูล - ปรัณญา ศรีบุญเพ็ง (หมวย)-Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="card-title text-center text-primary mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 1 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1zM8 4.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5"/>
            </svg>
            ฟอร์มรับข้อมูล - ปรัณญา ศรีบุญเพ็ง
        </h1>

        <form method="post" action="" class="needs-validation" novalidate>
            
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" autofocus required placeholder="กรุณาใส่ชื่อ-นามสกุล">
                <div class="invalid-feedback">
                    กรุณากรอกชื่อ-นามสกุล
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="เช่น 08x-xxxxxxx">
                <div class="invalid-feedback">
                    กรุณากรอกเบอร์โทรศัพท์
                </div>
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="height" name="height" min="100" max="200" required placeholder="100 ถึง 200">
                <div class="invalid-feedback">
                    กรุณากรอกส่วนสูง (100-200 ซม.)
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="ที่อยู่ปัจจุบัน"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color w-100" id="color" name="color" value="#0d6efd" title="เลือกสีที่ชอบ">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select class="form-select" id="major" name="major">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <hr class="my-4">

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="submit" name="Submit" class="btn btn-primary btn-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    สมัครสมาชิก
                </button>
                <button type="reset" class="btn btn-secondary btn-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708z"/>
                    </svg>
                    ยกเลิก
                </button>
            </div>

            <div class="mt-3 d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" onClick="window.location='https://www.msu.ac.th/';" class="btn btn-info text-white">Go to MSU</button>
                <button type="button" onMouseOver="alert('อ่านทำไม');" class="btn btn-warning">Hello (MouseOver)</button>
                <button type="button" onClick="window.print();" class="btn btn-outline-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                        <path d="M1 8a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H1zM3 3v4h10V3H3zm-2 6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H1zM3 10v4h10v-4H3z"/>
                    </svg>
                    พิมพ์
                </button>
            </div>
        </form>

        <hr class="mt-5">

        <?php
        if (isset($_POST['Submit'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $address = $_POST['address'];
            $birthday = $_POST['birthday'];
            $color = $_POST['color'];
            $major = $_POST['major'];

            echo "<h2 class='text-success mb-3'>ผลลัพธ์ข้อมูลที่ส่ง:</h2>";
            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'><strong>ชื่อ-สกุล:</strong> ".$fullname."</li>";
            echo "<li class='list-group-item'><strong>เบอร์โทร:</strong> ".$phone."</li>";
            echo "<li class='list-group-item'><strong>ส่วนสูง:</strong> ".$height." ซม.</li>";
            echo "<li class='list-group-item'><strong>ที่อยู่:</strong> <span class='text-muted'>".nl2br(htmlspecialchars($address))."</span></li>";
            echo "<li class='list-group-item'><strong>วันเดือนปีเกิด:</strong> ".$birthday."</li>";
            echo "<li class='list-group-item d-flex align-items-center'>
                    <strong>สีที่ชอบ:</strong> 
                    <span class='badge ms-2' style='background-color:{$color}; color:".(hexdec(substr($color, 1, 2)) + hexdec(substr($color, 3, 2)) + hexdec(substr($color, 5, 2)) > 382 ? '#000' : '#fff')."; border: 1px solid #ccc;'>
                        ".$color."
                    </span>
                    <div style='background-color:{$color}; width:30px; height:30px; border: 1px solid #ccc; margin-left: 10px;'></div>
                </li>";
            echo "<li class='list-group-item'><strong>สาขาวิชา:</strong> <span class='badge bg-info text-dark'>".$major."</span></li>";
            echo "</ul>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>