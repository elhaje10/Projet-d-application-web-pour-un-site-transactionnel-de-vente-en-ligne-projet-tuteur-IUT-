<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 18:54
 */
    if(!empty($_POST['nom']) || !empty($_POST['prenom'])|| !empty($_POST['mail'])
        || !empty($_POST['psw']) || !empty($_POST['pswVerif'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $psw = $_POST['psw'];
        $pswVerif = $_POST['pswVerif'];
        if(strcmp($psw,$pswVerif)!=0){
            echo"<script language=\"javascript\">";
            echo"alert('bonjour')";
            echo"</script>";
        }
    }else{
        include '../controleur/index.php?page=inscription';
    }
?>