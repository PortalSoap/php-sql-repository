<?php
    if(isset($_POST['add-data'])) {
        $name = $_POST["name"];
        $uppername = $_POST["uppername"];
        $phone = $_POST["phone"];

        $sql = "INSERT INTO alunos (Nome, Sobrenome, Telefone)
        VALUES ('$name', '$uppername', '$phone')";

        $conn->query($sql);
        echo "<meta http-equiv='refresh'content='0'/>";
    }
?>