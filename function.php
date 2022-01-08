<?php
    session_start();

    //Membuat koneksi ke databse
    $conn = mysqli_connect('localhost:3307','root','','stockbarang'); 
    
    //tambah barang baru
    if(isset($_POST['addnewbarang'])){
        $namabarang = $_POST['namabarang'];
        $stock = $_POST['stock'];
        $ownerid = $_SESSION['ownerid'];

        $query = "INSERT INTO stocks (ownerid, productname, ammount) VALUES ('$ownerid','$namabarang','$stock')";
        $addtotable = mysqli_query($conn, $query);
        // $result = mysqli_fetch_array($addtotable);
        if($addtotable){
            header('location:index.php');
        } else {
            header('location:index.php');
        }
    }


    //update info barang
    if(isset($_POST['updatebarang'])){
        $productname = $_POST['productname'];
        $ammount = $_POST['ammount'];   
        $sku = $_POST['sku'];

        $query = "UPDATE stocks set productname='$productname', ammount='$ammount' WHERE sku='$sku'";
        $updatetable = mysqli_query($conn,$query);
        if($updatetable){
            header('location:index.php');
        } else {
            header('location:index.php');
        }
    }


    //Delete barang
    if(isset($_POST['deletebarang'])){
        $sku = $_POST['sku'];

        $query = "DELETE FROM stocks WHERE sku='$sku'";
        $deleteitem = mysqli_query($conn,$query);
        if($deleteitem){
            header('location:index.php');
        } else {
            header('location:index.php');
        }
    }
?>