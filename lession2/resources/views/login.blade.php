<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>đăng nhập</h1>
    <form action="/login" method="POST">
        @csrf
        <p>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </p>
        <p>
            <input type="password" name="password" placeholder="Mật khẩu">
        </p>
        <p>
            <button type="submit">Đăng nhập</button>
        </p>
    </form>
</body>

</html>