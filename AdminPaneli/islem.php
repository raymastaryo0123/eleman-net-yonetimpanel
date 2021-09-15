<?php
ob_start();
session_start();


 require 'baglan.php';

 if(isset($_POST['kayit'])){
     $username = $_POST['username'];
     $password = $_POST['password'];
     $password_again = @$_POST['password_again'];

     if(!$username){
         
     } elseif(!$password || !$password_again){
         
     } elseif($password != $password_again){
        header('Refresh:0; http://localhost/AdminPaneli/kayit.php');
     } else{
         //veritabanı kayit
         $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?');
         $ekle = $sorgu->execute([
             $username, $password
         ]);
         if($ekle){
     
             header('Refresh:0; http://localhost/AdminPaneli/index.php');

         } else{
            header('Refresh:0; http://localhost/AdminPaneli/kayit.php');
         }
     }
 }

 if(isset($_POST['giris'])){
     $username = $_POST['username'];
     $password = $_POST['password'];

     if(!$username){
         
     } elseif(!$password){
         
     } else{
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? && user_password = ?');
        $kullanici_sor->execute([
            $username, $password
        ]);

        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            
            header('Refresh:0; http://localhost/AdminPaneli/index1.php');
        } else{
            header('Refresh:0; http://localhost/AdminPaneli/index1.php');
        }
     }
 }
?>