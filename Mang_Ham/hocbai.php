<?php
//lấy dữ liệu từ form
if (isset($_POST['product_description'])) {
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    //tính chiết khẩu
    $discount = $list_price * $discount_percent * 0.01;
    $discount_price = $list_price - $discount;
    //Áp dụng định dạng tiền tệ cho đông đô-la và tỉ lệ phần trăm ;
    $list_price_formatted = "$" . number_format($list_price);
    $discount_percent_formatted = $discount_percent . "%";
    $discount_formatted = "$" . number_format($discount, 2);
    $discount_price_formatted = "$" . number_format($discount_price, 2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="hocbai.css">
</head>

<body>
    <div class='content'>
        <h1>Product Discount Calculator</h1>
        <label>Product Description </label>
        <span><?php echo $product_description ?></span> <br>
        <label>List Price:</label>
        <span><?php echo $list_price_formatted ?></span> <br>
        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted ?></span> <br>
        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted ?></span> <br>
        <label>Discount Price</label>
        <span><?php echo $discount_price_formatted ?></span> <br> <br>
        <button type="button" onclick="quay_lai_trang_truoc()"id="button"> Quay lại trang trước</button>
        <script>
            function quay_lai_trang_truoc() {
                history.back();
            }
        </script>
    </div>
</body>

</html>