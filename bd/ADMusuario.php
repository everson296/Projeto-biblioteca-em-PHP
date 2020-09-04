<?php
    $usuario = "everson";
    require_once('conexao.php');
    $conex = conexaoMysql();

$sql = "select tblusuario.nomeUsuario, tblusuario.nivel, tblusuario.email, tblusuario.ativacao, tblnivel.nomeNivel 
        from tblusuario, tblnivel 
        where tblusuario.nivel = tblnivel.idNivel
        order by idUsuario desc";

$select = mysqli_query($conex, $sql);
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/ADMusuario.css">        
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
                    <a href="cadastrarUsuario.php"><div class="btnCadastro">cadastrar Úsurio</div></a>
                    <a href="cadastrarNivel.php"><div class="btnCadastro">cadastrar Nível</div></a>
                </div>
                
                <table>
                    <tr>
                        <td>nome</td>
                        <td>nivel</td>
                        <td>ativação</td>
                        <td>opcoes</td>
                    </tr>
                    
                    <?php 
                        while($rsUsuario = mysqli_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td><?=$rsUsuario['nomeUsuario']?></td>
                        <td><?=$rsUsuario['nomeNivel']?></td>
                        <td><?=$rsUsuario['ativacao']?></td>
                        <td>sim sim sim</td>
                    </tr>
                    
                    <?php } ?>
                </table>
            </div>
           
            <footer>desenvolvido por: Everson Silva de Almeida</footer>
        </div>
       
        
       
    </body>
</html>