<?php
    if(isset($_POST['sign-up'])) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "INSERT INTO usuarios (Nome, Sobrenome, Usuario, Senha) 
        VALUES ('$name','$surname','$username','$password');";
    }
?>