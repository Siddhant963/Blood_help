<?php
$servername= "localhost";
$username= "root";
$password= "";
$databasename= "donors";

$con = mysqli_connect($servername, $username, $password , $databasename);
if(!$con){ 
    echo "database not connected...";
    print_r(mysqli_connect_error());

}else{ 
   // echo "database connect";
}

?>