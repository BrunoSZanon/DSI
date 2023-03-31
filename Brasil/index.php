<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Sistema de ensino</h2>
        <form method="get" action="index.php">
        <table>
            <tr>
                <td>Matricula (número)</td>
                <td>
                    <input type="number" name="matricula" placeholder="Matricula">
                </td>
            </tr>
            <tr>
                <td>Nome do aluno</td>
                <td>
                    <input type="text" name="nome" placeholder="Nome do Aluno">
                </td>
            </tr>         
            <tr>
                <td>Turma</td>
                <td>
                    <input type="radio" name="turma" value='411'>411
                    <input type="radio" name="turma" value='421'>421
                    <input type="radio" name="turma" value='431'>431
                    <br>
                    <input type="radio" name="turma" value='412'>412
                    <input type="radio" name="turma" value='422'>422
                    <input type="radio" name="turma" value='432'>432
                    <br>
                    <input type="radio" name="turma" value='413'>413
                    <input type="radio" name="turma" value='423'>423
                    <input type="radio" name="turma" value='433'>433
                <td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td>
                    <input type="number" name="Telefone" placeholder="Número para contato">
                </td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>
                    <select name="estado">
                        <option value="">Selecione um estado</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>                       
                                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Enviar" placeholder="Cadastrar Aluno">
                    <input type="reset" name="Limpar campos" placeholder="Cadastrar Aluno">
                </td>
            </tr           
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
