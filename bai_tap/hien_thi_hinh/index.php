<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<style>
    input {
        margin-top: 10px;
    }
</style>
<body>
<form method="post">
    Chon hinh ban muon in:<br>
    <select name="method">
        <option>Rectangle</option>
        <option>triangle-top</option>
        <option>triangle-bot</option>
    </select><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $method = $_POST["method"];
    switch ($method) {
        case "Rectangle":
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 10; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case "triangle-top":
            for ($i = 10; $i > 0; $i--) {
                for ($j = 0; $j < $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case "triangle-bot":
            for ($i = 0; $i < 10; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
    }
}
?>
</body>
</html>
