<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
<table border="0">
    <caption><h1>Future Value Calculator</h1></caption>
<form action="" method="post">
    Inventment Amount: <input type="text" name="inventment">
    Yearly Interest Rate: <input type="text" name="rate">
    Number of Years: <input type="text" name="numberYear">
    <input type="submit">
</form>
<?php
$tienvao = $_POST["inventment"];
$laisuat = $_POST["rate"];
$sonam = $_POST["numberYear"];
for($i = 0;$i < $sonam; $i++){
    $tienvao += $tienvao*($laisuat/100);
}
echo "Future Value $tienvao";
?>
</body>
</html>

