<?php

// use Illuminate\Support\Facades\Session;

header('Access-Control-Allow-Origin:*');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
	<?php
		//GET - POST
		echo "Nhan du lieu bang phuong thuc GET";
		echo "<br>==============================";
		echo "<pre>";
		print_r($_GET);
		echo "</pre>";
		
		echo "Nhan du lieu bang phuong thuc POST";
		echo "<br>==============================";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		$username = 'root'; //tên đăng nhập CSDL
	    $password = ''; // mật khẩu
	    $options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	    //kết nối tới CSDL
		// Session::flash("success","đã thêm vào giỏ hàng thành công");
	    $connect = new PDO('mysql:host=localhost;dbname=shopbooks', $username, $password,$options);
		$sql    = "INSERT INTO `carts` (`id`, `book_id`, `user_id`, `price`, `created_at`, `updated_at`, `quantity`) VALUES (NULL, '".$_REQUEST["book_id"]."', '".$_REQUEST["user_id"]."', '".$_REQUEST["price"]."', NULL, NULL, '".$_REQUEST["quantity"]."'); ";
	    $stmt   = $connect->query( $sql );
	    $stmt->setFetchMode(PDO::FETCH_OBJ);
	    $row    = $stmt->fetch();
	?>