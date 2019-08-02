<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Exercicio 1</title>
    </head>
    <body>
    <?php



    if(empty($_POST))
    {
    echo"<form action=\"cadastra_exercicio1.php\" method=\"POST\">
    
        <p><label>Nome:</label>
                <input type=\"text\" name=\"nome\" size=\"30\" required/>
            </p>
        <p><label>Email:</label>
                <input type=\"email\" name=\"email\" required/>
            </p>
        <p><label>Sexo:</label>
                <input type=\"radio\" name=\"sexo\" value=\"Masculino\">Masculino
                <input type=\"radio\" name=\"sexo\" value=\"Feminino\">Feminino<br>
        </p>
        <p><label>Nivel de Escolaridade:</label>
                <input type=\"radio\" name=\"escolaridade\" value=\"Fundamental\">Fundamental
                <input type=\"radio\" name=\"escolaridade\" value=\"Médio\">Médio
                <input type=\"radio\" name=\"escolaridade\" value=\"Superior\">Superior<br>
        </p>

        <p><label>Linguagens: </label>
            <input type=\"checkbox\" name=\"linguagens\" value=\"C\">C
            <input type=\"checkbox\" name=\"linguagens\" value=\"PHP\">PHP
            <input type=\"checkbox\" name=\"linguagens\" value=\"JS\">JavaScript
            <input type=\"checkbox\" name=\"linguagens\" value=\"JAVA\">java
            <input type=\"checkbox\" name=\"linguagens\" value=\"PYTHON\">Python
            </p>
        <input type=\"submit\" value=\"Enviar\"/>
</form>
    
    ";
            }
        ?>