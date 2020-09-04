<?php
session_start();

require_once('conexao.php');
$conex = conexaoMysql();

$action = 'insert.php?modo=insertLivro';
$actionImg = 'updateImg.php?verificar=insertLivro';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/cadastros.css">   
        <script defer src="../js/jquery2.js"></script>
        <script>
            $(document).ready(function(){
               
                $('#file').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#vizualizarImg'    
                   }).submit();
                });
        </script>               
                  
    </head>
    <body>
        
        <div id="containerImg">
            <form action="<?=$actionImg?>" name="frmImg" method="post" enctype="multipart/form-data">
                
                <input type="file"  accept="image/jpeg, image/gif, image/png" name="fleImg" id="file" hidden>
                <label for="file">Selecione uma imagem</label>
                
                <div id="vizualizarImg"></div>
                
                
            </form>
        </div>
        
        <div id="containerCadastro">
            <form name="" method="post" action="<?=$action?>">
                <input type="text" name="txt" placeholder="nome do livro" value="">
                
                <input type="text" name="txt" placeholder="nome da editora" value="">
                
                <input type="text" name="txt" placeholder="quantidade de exemplares" value="">
                
                                <!-- ======== GÊNEROS ======= -->
                <select>
                     <option value="0">Selecione um gênero</option>
                    
                     <?php 
                        $sqlGenero = 'select *from tblGenero';
                        $selectGenero = mysqli_query($conex, $sqlGenero);
                        while($rsDados = mysqli_fetch_assoc($selectGenero)){
                     ?>
                     <option value="<?=$rsDados['idgenero']?>"><?=$rsDados['genero']?></option>
                     <?php } ?>
                </select>
                
                                <!-- ======== TIPO ======= -->
                <select>
                    <option value="0">Selecione um tipo</option>
                   
                    <?php 
                        $sqlTipo = 'select *from tblTipo';
                        $selectTipo = mysqli_query($conex, $sqlTipo);
                        while($rsDados = mysqli_fetch_assoc($selectTipo)){
                     ?>
                     <option value="<?=$rsDados['idTipo']?>"><?=$rsDados['tipo']?></option>
                     <?php } ?>
                </select>
                                <!-- ======== AREA ======= -->
                <select>
                    <option value="0">Selecione um área</option>
                   
                    <?php 
                        $sqlArea = 'select *from tblArea';
                        $selectArea = mysqli_query($conex, $sqlArea);
                        while($rsDados = mysqli_fetch_assoc($selectArea)){
                     ?>
                     <option value="<?=$rsDados['idArea']?>"><?=$rsDados['area']?></option>
                     <?php } ?>
                </select>
                                <!-- ========  AUTOR ======= -->
                <select>
                    <option value="0">Selecione um Autor</option>
                   
                    <?php 
                        $sqlAutor = 'select *from tblautor';
                        $selectAutor = mysqli_query($conex, $sqlAutor);
                        while($rsDados = mysqli_fetch_assoc($selectAutor)){
                     ?>
                     <option value="<?=$rsDados['idAutor']?>"><?=$rsDados['nomeAutor']?></option>
                     <?php } ?>
                </select>
            
                <div id="configBtn">
                    <input type="submit" name="btnCadastroLivro" value="cadastrar">
                    <div id="voltar" onclick="location.href='ADMlivro.php'">voltar</div>
                </div>
                
            </form>
        </div>
       
    </body>
</html>