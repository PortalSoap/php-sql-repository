<?php
    if(isset($_POST['sign-in'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT Admin FROM usuarios WHERE Usuario = '$username' AND Senha = '$password'";

        if($conn->query($sql)) {
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $isAdmin = $row["Admin"];
            }
            if($isAdmin == 1) {
                header("Location: admin-page.php");
            } else {
                header("Location: user-page.php");
            }
        } else {
            header("Location: index.php");
        }
    }
?>