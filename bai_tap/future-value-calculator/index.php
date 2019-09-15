<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
</head>
<style>
    input {
        margin: 10px;
    }
</style>
<body>
<?php
$result=0;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $money = $_POST["moneys"];
    $rates = $_POST["rates"];
    $years = $_POST["years"];
    $result = $money*(1+$rates/100)**$years;
}
?>
<form method="post">
    InventmentAmount:<br><input name="moneys" type="text"><br>
    Yearly interest Rate:<br><input name="rates" type="text">%<br>
    Number of years:<br><input name="years" type="text"><br>
    <input type="submit" value="Submit">
    <p>So tien lai kep cua ban la: <?php echo $result;?></p>
</form>

</body>
</html>
