<?php
require_once('conexao.php');
$conex = conexaoMysql();

$action = 'insert.php?modo=insertUsuario';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/cadastros.css">        
    </head>
    <body>
        
        <div id="containerCadastro">
            <form name="" method="post" action="<?=$action?>">
                <input type="text" name="txtNome" placeholder="nome" value="">
                
                <input type="password" name="txtSenha" placeholder="senha" value="">
                
                <input type="email" name="txtEmail" placeholder="email" value="">
                
                                <!-- ======== GÊNEROS ======= -->
                <select name="sltNivel">
                     <option> selecione um Nivel</option>
                    
                     <?php 
                        $sql = "select *from tblNivel";

                        $select = mysqli_query($conex, $sql);
                        while($rsDados = mysqli_fetch_assoc($select)){
                     ?>
                     <option value="<?=$rsDados['idNivel']?>"><?=$rsDados['nomeNivel']?></option>
                     <?php } ?>
                </select>
                
                                <!-- ======== TIPO ======= -->
                
            
                <div id="configBtn">
                    <input type="submit" name="btnCadastroLivro" value="cadastrar">
                    <div id="voltar" onclick="location.href='ADMusuario.php'">voltar</div>
                </div>
                
            </form>
        </div>
       
    </body>
</html>