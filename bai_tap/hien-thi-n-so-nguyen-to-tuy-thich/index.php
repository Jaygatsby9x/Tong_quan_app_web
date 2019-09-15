<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
$number = $_POST["inp-number"];
$count =0;
function isPrime($num)
{
    if ($num < 2) {
        return false;
    } else for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
?>

<form method="post">
    <input name="inp-number" type="text">
    <input type="submit" value="Submit">
</form>
<?php
for ($i = 2; $count < $number; $i++) {
    if (isPrime($i)) {
        echo $i . "<br>";
        $count++;
    }
}
?>
</body>
</html>
