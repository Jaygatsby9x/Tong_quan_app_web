<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<style>
    input{
        margin: 5px;
    }
</style>
<body>
<form action="display_discount.php" method="post">
    Product Description:<br><input name="product" type="text"><br>
    List Price:<br><input name="price" type="text"><br>
    Discount Percent:<br><input name="rate" type="text"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>