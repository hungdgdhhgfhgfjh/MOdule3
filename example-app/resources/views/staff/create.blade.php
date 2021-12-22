

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
.body {
    background-image: url("https://lh3.googleusercontent.com/iEgYEImW_pDNT13ar8YJzj6lLYjSkCbM0ROyv7elI1cXRM2tdGogs-ctW8tlYRE1r3zB8bDlMW4osxMJ86sMPUiOdlLZ156oBmXz-H_hhk5RCg5k6Z6U6TqVueCZmG2Bx56tkUAqGQ=w1314-h891-no");
    width: 100%;
}
</style>
<div class="container" >
<h1 class="text-center text-warning">Create</h1>
</div>
<div style="height: 503px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
    <div class="container">
        <form action="{{Route('staff.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="email"> Name Staff </label>
                <input type="text" class="form-control" placeholder="Name Staff" name="name_staff">
              
            </div>
            <div class="form-group">
                <label for="pwd">Position</label>
                <input type="text" class="form-control" placeholder="Position" name="position">
            </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
