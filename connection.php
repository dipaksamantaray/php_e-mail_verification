<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "emailphp";
$con = mysqli_connect($server,$user,$pass,$db);
if($con){
    ?>
    <script>
    alert("connection sucessful");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("not connected");
    </script>
    <?php

}
?>