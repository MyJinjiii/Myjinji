<?php
    $name=@$_POST['name'];
    $sname=@$_POST['sname'];
    $username=@$_POST['username'];
    $password=@$_POST['password'];
    $tel=@$_POST['tel'];
    $adds=@$_POST['adds'];
    
    include("../web/connect.php");
    print_r($_FILES);
  //  if(!isset($_POST['filename'])){
   /* $dir="upload/".$_FILES["filename"]["name"];
    $filename=$_FILES["filename"]["name"];
   move_uploaded_file($_FILES["filename"]["tmp_name"],$dir);*/
   $save="insert into customer(id,name,sname,username,password,tel,adds) values('','$name','$sname','$username','$password','$tel','$adds')";
    $con->query($save);
    if($con==true){
        echo"เพิ่มข้อมูลสำเร็จ";
        header("refresh:3; url=login.php");
    }
//}
    ?>