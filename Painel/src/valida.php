<?php

if(isset($_POST["username"]) AND isset($_POST["password"]));

$user = $_POST["username"];
$pass = $_POST["password"];

$uservalida = "mauro";
$passvalida = "123";


if (($user == $uservalida) AND ($pass == $passvalida)){
    header('Location: home.php');
    $statuscliente = "Online";
}
else{
    echo "Não Logado";
}
