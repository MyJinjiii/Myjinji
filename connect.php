<?php
    $con=new mysqli("localhost","root","","farming store");
    if($con->connect_error){
        echo "ติดต่อฐานข้อมูลไม่ได้";
    }
    else{
        echo"สำเร็จ";
    }
    
    ?>