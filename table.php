<?php
    $sql = "SELECT Nome, Sobrenome, Telefone FROM alunos";
    $result = $conn->query($sql);

    echo
    "<table>
        <thead>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
        </thead>
        <tbody>";
        
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo
            "<tr>"
                ."<td>".$row["Nome"]."</td>"
                ."<td>".$row["Sobrenome"]."</td>"
                ."<td>".$row["Telefone"]."</td>"
            ."</tr>";
        }
        echo
        "</tbody>
        </table>";
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