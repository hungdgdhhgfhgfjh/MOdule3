<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> trang mua hàng online </title>
</head>
<body>
    <form method = "POST" action = "/online">
        @csrf
        <p>
        Product_Description: <input type = "text" name = "product_pescription" placeholder = "nhập">
        </p>
        <p>
        List_Price : <input type = "text" name = "list_price" placeholder = "nhập">
        </p>
        <p>
        Discount_Percent :<input type = "text" name = "discount_percent" placeholder = "nhập">
        </p>
        <input type = "submit" value ="Calculate Discount">
    </form>
</body>
</html>
