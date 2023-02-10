<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   </head>
   <body>
   <?php
    session_start();
    include("../web/connect.php");
    $username=@$_POST['username'];
    $password=@$_POST['password'];
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
   //print_r($_SESSION);
    $select="select * from customer where username='$_SESSION[username]' and password='$_SESSION[password]'";
    $data=$con->query($select);
    $row=$data->fetch_assoc();
    if($row==true){
        $_SESSION['name']=$row['name'];
        $_SESSION['sname']=$row['sname'];
        $_SESSION['id']=$row['id'];
        echo"ยินดีต้อนรับ";
        header("refresh:1; url=store.html");
    }
    else{
        echo"<div class='alert alert-danger' role='alert' style='width=30%'> คุณยังไม่สมัครสมาชิก หรือ username password ไม่ถูกต้อง </div>";
      
        
    }

    
 
    ?>
   </body>
   </html> 
   