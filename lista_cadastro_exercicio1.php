<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Lista pessoas </title>
    </head>
    <body>
        <?php
                $email = $_SESSION["email"];
                $nome = $_SESSION["nome"];
                $sexo = $_SESSION["sexo"];
                $escolaridade = $_SESSION["escolaridade"];
                $linguagens = $_SESSION["linguagens"];
                
                echo "
                        <table class=\"tabela1\" width=\"30%\" border=\"1\".
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Escolaridades</th>
                                <th>Linguagens</th>
                            </tr>
                        </thead>
                        <tbody>";
                for($i=0;$i<sizeof($_SESSION["nome"]);$i++)
                {
                    echo "<tr>
                                <td>".$nome[$i]."</td>
                                <td>".$email[$i]."</td>
                                <td>".$sexo[$i]."</td>
                                <td>".$escolaridade[$i]."</td>
                                <td>".$linguagens[$i]."</td>
                            </tr>";
                }
                echo " </tbody>
                        <table>
                    ";
        ?>
    </body>
    </html>