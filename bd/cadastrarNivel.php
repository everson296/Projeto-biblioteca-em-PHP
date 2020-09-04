<?php
require_once('conexao.php');
$conex = conexaoMysql();

$action = 'insert.php?modo=insertNivel';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/cadastros.css">        
    </head>
    <body>
        
        <div id="containerCadastroNivel">
            <form name="" method="post" action="<?=$action?>">
                <input type="text" name="txtNome" placeholder="nome do nivel" value="">
            
                <div class="configCheck">
                    <input type="checkbox" name="ADMcliente" value="1"> <p>ADMcliente</p>
                    <input type="checkbox" name="ADMLivro" value="1"> <p>ADMLivro</p>
                    <input type="checkbox" name="ADMUsuario" value="1"> <p>ADMUsuario</p>
                </div>
                
                
            
                <div id="configBtn">
                    <input type="submit" name="btnCadastroLivro" value="cadastrar">
                    <div id="voltar" onclick="location.href='ADMusuario.php'">voltar</div>
                </div>
                
            </form>
        </div>
       
    </body>
</html>