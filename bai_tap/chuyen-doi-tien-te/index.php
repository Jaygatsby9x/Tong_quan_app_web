<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $rate = 23000;
    $usd = $_POST["inp-usd"];
    $vnd = $rate*$usd." vnd";
}
?>
<form method="post">
    <input name="inp-usd" type="number">
    <input value="Submit" type="submit">
</form>
<p>so tien cua ban la:<?php echo $vnd;?></p>
</body>
</html>
