<!DOCTYPE html>
<html>
    <head>
        <title>Página sem nome</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!--Integrantes do Grupo: Amanda Terezinha, Deivid, Gabrielly, Lucas-->
        <h1>Título da Página</h1>
        <?php
           
            echo "uma frase criativa"."<br>";
            $servidor = "localhost";
            $usuario = "developer";
            $senha = "dev1234";
            $nomedb = "maindb";

            $conn = new mysqli($servidor, $usuario, $senha, $nomedb);

            if($conn -> connect_error) {
                die("<h4>Conexão Falhou:</h4>".$conn -> connect_error);
            }
            echo "<h4>Conectado ao DB</h4>"."<br>";

            $sql = "SELECT Nome, Sobrenome, Telefone FROM agenda";
            $result = $conn -> query($sql);

            echo 
            "<table>
                <thead>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                </thead>
                <tbody>";
                    
               
            if($result -> num_row > 0) {
                while($row = $result -> fetch_assoc()) {
                    echo
                    "<tr>"
                        ."<td>".row["Nome"]."</td>"
                        ."<td>".row["Sobrenome"]."</td>"
                        ."<td>".row["Telefone"]."</td>"
                    ."</tr>";
                    echo
                    "</tbody>
                    </table>";
                }
            } else {
                echo
                "<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
                echo
                "</tbody>
                </table> </br>";
                echo "<h4>0 resultados encontrados. A tabela está vazia.</h4>";
            }
        ?>
    </body>
</html>