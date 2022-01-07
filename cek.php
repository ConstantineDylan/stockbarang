<?php
//if belum login
if(!isset($_SESSION['log'])){
    header('location:login.php');
} else {
    $ownerid = $_SESSION['ownerid'];
}
?>