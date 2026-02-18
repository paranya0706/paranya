<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรัณญา ศรีบุญเพ็ง (หมวย)</title>

<style>
    input[type="radio"] {
        display: none;
    }

    .btn {
        padding: 8px 15px;
        border: 1px solid #0d6efd;
        background-color: white;
        color: #0d6efd;
        cursor: pointer;
        margin-right: 5px;
    }

    .btn:hover {
        background-color: #0d6efd;
        color: white;
    }

    img {
        display: none;
        margin-top: 20px;
        width: 300px;
    }

    #img1:checked ~ .photo1 {
        display: block;
    }

    #img2:checked ~ .photo2 {
        display: block;
    }
</style>

</head>

<body>

<h1>งาน k -- 66010914051 ปรัณญา ศรีบุญเพ็ง</h1>

<!-- ปุ่ม -->
<input type="radio" name="photo" id="img1">
<label for="img1" class="button">รูปที่ 1</label>

<input type="radio" name="photo" id="img2">
<label for="img2" class="button">รูปที่ 2</label>

<br>

<!-- รูปภาพ -->
<img src="12.jpg" class="images">
<img src="11.jpg" class="images">

</body>
</html>
