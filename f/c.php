<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปรัณญา ศรีบุญเพ็ง (หมวย)</title>
</head>

<body>

<h1>ปรัณญา ศรีบุญเพ็ง (หมวย)</h1>

<form method="post" action="">
	กรอกคะแนน <input type="number" min="0" max="100" name="a" autofocus required>
    <button type="submit" name="Submit">OK</button>
</form>
<hr>

<h1>
 <?php
    if(isset($_POST['Submit'])){
        $score = $_POST['a'];
            if ($score >= 80) {
            $grade = "A" ;
            } else if ($score >= 70) {
            $grade = "B" ;
            } else if ($score >= 60) {
            $grade = "C" ;
            } else if ($score >= 50) {
            $grade = "D" ;
            } else {
            $grade = "F" ;
            }
        echo "<h2> คะแนนของคุณคือ $score คะแนน  คุณได้เกรด $grade </h2>" ; 
    }
?>
</h1>

</body>
</html>