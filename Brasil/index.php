<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>UFSM</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Sclicitar acesso ao sistema</h2>
        <form method="get" action="index.php">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td>
                        <input type="text" name="nome"
                               placeholder="Informe seu nome completo">
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="text" name="email"
                               placeholder="Informe seu e-mail">
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>Telefone</td>
                    <td>
                        <input type="text" name="telefone"
                               placeholder="Informe seu telefone">
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>Atuação</td>
                    <td>
                        <input type="text" name="atuação"
                               placeholder="Sua área de atuação">
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>Selecione um tipo de acesso</td>
                    <td>
                       <input type="radio" name="turma" value="Administrador">Administrador
                        <br>
                        <br>
                        <input type="radio" name="turma" value="Estudante">Estudante
                        <br>
                        <br>
                        <input type="radio" name="turma" value="Produtor">Produtor
                        <br>
                        <br>
                        <input type="radio" name="turma" value="Professor">Professor
                        <br>
                        <br>
                        <input type="radio" name="turma" value="Técnico">Técnico
                        <br>
                        <br>
                        <input type="radio" name="turma" value="Visitante">Visitante
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>Estado</td>
                    <td>
                        <select name="estado">
                            <option value="Acre">Acre</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td>Cidade</td>
                    <td>
                        <select name="cidade">
                            <option value="Rio Branco">Rio Branco</option>
                            <option value="Porto Alegre">Porto Alegre</option>
                            <option value="SFlorianópolis">Florianópolis</option>
                            <option value="São Paulo">São Paulo</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Solicitar acesso">
                    </td>
                    <td></td>
                </tr>
            </table>
            <?php
            if ($_GET) {
                
                $nome = $_GET['nome'];
                echo("Seu nome é: ". $nome);
            }
            ?>
        </form>
    </body>
</html>
