<?php

$heading = "Se connecter";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty($password)){
        dd("Veuillez remplir tous les champs");
    }else{
        if($username == "admin" && $password == "admin"){
            header("location: /");
        }else{
            page_not_found(401);
        }
    }
}
require "views/login.view.php";
