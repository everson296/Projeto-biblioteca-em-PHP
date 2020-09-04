<?php
    $usuario = "everson";
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/ADMlivro.css">        
    </head>
    <body>
        
        <div id="containerCMS">
            <div id="containerLogo">
                <div id="containerTextoCms">
                    <p>CMS</p>- Sistema de gerenciamento do site
                </div>
                <div id="containerImg">
                    <div id="imgCMS"></div>
                </div>
            </div>
            
            <div id="containerMenu">
                
                <div class="containerLink" onclick="location.href='../bd/ADMcliente.php'">
                    <div class="imgLink" id="ADMcliente"></div>
                    <div class="textoLink">ADM.Cliente</div>
                </div>
                
                <div class="containerLink" onclick="location.href='../bd/ADMlivro.php'">
                    <div class="imgLink" id="ADMlivro"></div>
                    <div class="textoLink">ADM.Livro</div>
                </div>
                
                <div class="containerLink" onclick="location.href='../bd/ADMusuario.php'">
                    <figure>
                        <img src="../cms/img/menu/adult_man.png" alt="">
                    </figure>
                    <div class="textoLink">ADM.Úsuario</div>
                </div>
                
                <div id="containerBoasVindad">
                    <div id="msgBoasVindas">Bem vindo, <?=$usuario?></div>
                    <a><div id="logout">logout</div></a>
                </div>
            </div>
            
        <!-- ========================== conteudo =========================== -->
            
            <div class="containerConteudo">
                <div class="barraDeTarefas">
                    <a href="cadastroLivro.php"><div class="btnCadastro">Cadastrar livro</div></a>
                </div>
                
                <table>
                    <tr>
                        <td>nome</td>
                        <td>data</td>
                        <td>ativação</td>
                        <td>opcoes</td>
                    </tr>
                    
                    <tr>
                        <td>nome</td>
                        <td>data</td>
                        <td>ativação</td>
                        <td>opcoes</td>
                    </tr>
                </table>
            </div>
           
            <footer>desenvolvido por: Everson Silva de Almeida</footer>
        </div>
       
        
       
    </body>
</html>