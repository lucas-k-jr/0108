<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Exercicio 1</title>
    </head>
    <body>
    <?php
            {
                $_SESSION['nome'][] = $_POST["nome"];
                $_SESSION['email'][] = $_POST["email"];
                $_SESSION['sexo'][] = $_POST["sexo"];
                $_SESSION['escolaridade'][] = $_POST["escolaridade"];
                $_SESSION['linguagens'][] = $_POST["linguagens"];
                echo "<h2>Dados cadastrados com sucesso!</h2>";
                echo "<p>
                <a href=\"form_exercicio1session.php\">Cadastrar Aluno</a> 
                ||<a href=\"lista_cadastro_exercicio1.php\"> Lista Cadastrados </a>
                 
                </p>";
            }
    ?>