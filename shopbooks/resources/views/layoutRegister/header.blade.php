<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<style>
body{
background-image: url(https://khongsolac.com/wp-content/uploads/2019/08/quan-ca-phe-sach-hub-book-coffee-2.jpg);
width: 100%;
}
#content {
position: absolute;
top: 25%;
left: 45%;
height: 500px;
margin-top: -75px;
width: 400px;
margin-left: -110px;
background: white;
border-radius: 10px;
}

</style>
@yield("header")