<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&family=Kanit:ital,wght@0,200;1,100&display=swap" rel="stylesheet">
<style>
    form{
        font-family: 'Charm', cursive;
    font-family: 'Kanit', sans-serif;
}</style>
  </head>
  <body>
  <style>
body {
  background-image: url('../img/bg.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
    <br><br><br><br><br><br><br><br><br><br>
    <?php   
            session_start();
            session_unset();
            ?>
            
   <form action="checklogin.php" name="login" method="post" enctype="multipart/form-data">  
    <table align="CENTER"><tr>
        <td>        
  <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header" >Login</div>
  <div class="card-body" class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" name="username" placeholder="username" required>
</div>
<div class="card-body" class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">password</label>
  <input type="password" class="form-control" name="password" placeholder="password" required>
  <div class="col-auto">
    <br>
    <input class="btn btn-primary" type="submit" value="เข้าสู่ระบบ">
    <input class="btn btn-primary" type="reset" value="ยกเลิก">
    <button type="button" class="btn btn-danger"><a href='register.php'>สมัครสมาชิก</a></button>
  </div>
</div>
  </div>
</div>
<td><tr>
</table>
    </form>
  </body>
</html>