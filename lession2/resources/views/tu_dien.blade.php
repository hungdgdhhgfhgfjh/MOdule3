<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập</title>
</head>
<body>
    <form method = "POST" action = "/tu_dien">
        @csrf
        <p>
        Enter the word to be translated:  <input type = "textbox" name="english" placeholder = "English">
        </p>
            <input type = "submit" value = "Translate">
    </form>
</body>
</html>