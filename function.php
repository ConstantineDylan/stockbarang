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

?>