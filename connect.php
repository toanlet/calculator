<?php

    $db ="localhost";
    $dbuser= "root";
    $pass="";
    $dbname="user";
    $con = new mysqli($db,$dbuser,$pass,$dbname);
    if($con ->connect_error){
        die("kết nối không thành công".$con ->connect_error);
    }
    echo "kết nối thành công";

?>