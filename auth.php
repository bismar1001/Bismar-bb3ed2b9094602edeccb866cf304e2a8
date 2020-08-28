
<?php
    require_once('koneksi.php');
    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 

    $username   = $_POST['username'];
    $password   = $_POST['password'];
   
    $query1 = "select * from members where username= '$username' and password='$password'";
   
    $count = $koneksi->query($query1);
    if($count->num_rows > 0){
        echo "1";
        
        //return;
    } else {
        echo "0";
        //return;

    }
    
    $koneksi->close();
?>