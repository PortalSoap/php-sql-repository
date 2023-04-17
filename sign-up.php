<?php
    if(isset($_POST['sign-up'])) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "INSERT INTO usuarios (Nome, Sobrenome, Usuario, Senha, Admin) 
        VALUES ('$name','$surname','$username','$password', 0);";
        
        $conn->query($sql);
        header("Location: index.php");
    }
?>