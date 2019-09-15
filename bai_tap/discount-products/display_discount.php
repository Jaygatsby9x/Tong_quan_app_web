<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<?php
$price = $_POST['price'];
$product = $_POST["product"];
$rate = $_POST["rate"];
$discountAmount = $price * $rate / 100 * 0.1;
$discountPrice = $price - $discountAmount; ?>
<body>
<p>ten san pham la:<?php echo $product?></p>
<p>gia niem yet cua san pham la:<?php echo $price?></p>
<p>ti le chiet khau cua san pham la:<?php echo $rate?></p>
<p>luong chiet khau cua san pham la:<?php echo $discountAmount?></p>
<p>Gia cua san pham sau khi chiet khau la:<?php echo $discountPrice?></p>
</body>
</html>
