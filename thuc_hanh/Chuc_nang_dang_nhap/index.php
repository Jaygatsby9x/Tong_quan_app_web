<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<style >
.login {
    height: 180px;
    width: 280px;
    margin: 0;
    padding: 20px;
    border: 10px #CD214F solid;
}
    .login input{
        padding: 2px;
        margin: 2px;
    }
</style>
<body>
<?php
var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>
<form method="get">
    <div class="login">
        <h2>Login<h2>
            <input type="text" name="username" size="30" placeholder="username" />
            <input type="password" name="password" size="30" placeholder="password" />
            <input type="submit" value="Sign in" />
    </div>
</form>

</body>
</html>
