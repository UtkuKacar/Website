<?php
    $kime = "utkukacar1808@gmail.com";
    $konu = $_POST["subject"];
    $mesaj = "<h1>".$_POST["message"]."<h1>";
    $baslik .= "From: ".$_POST["name"]."<".$_POST["mail"].">\r\n";
    $baslik .= "Reply-to : utkukacar1808@gmail.com\r\n";
    $baslik .= "Content-type text/html\r\n";

    if(mail($kime,$konu,$mesaj,$baslik)){
        echo "Mailiniz Gönderildi.";
    }
    else{
        echo "Hata Oluştu.";
    }
?>