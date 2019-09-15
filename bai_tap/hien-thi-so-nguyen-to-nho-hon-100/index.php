<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<?php
function isPrime($num){
    if ($num < 2){
        return false;
    }
    else for ($i=2;$i<=sqrt($num);$i++){
        if ($num%$i==0){
            return false;
        }
    }
    return true;
}
for ($i=2;$i<100;$i++){
    if (isPrime($i)){
        echo $i."<br>";
    }
}
?>
</body>
</html>
