<?php 
require_once('conexao.php');
$conex = conexaoMysql();

if(isset($_GET['modo'])){
 
    // ==================== CADASTRO DE NIVEL ========================
    
    if($_GET['modo'] == 'insertNivel'){
        
        $nome = $_POST['txtNome'];
        @$ADMcliente = $_POST['ADMcliente'] ? 1 : 0;
        @$ADMLivro = $_POST['ADMLivro'] ? 1 : 0;
        @$ADMUsuario = $_POST['ADMUsuario'] ? 1 : 0;
        $ativacao = 1;
        
        $sql="insert into tblNivel(nomeNivel, ADMcliente, ADMLivro, ADMUsuario, ativacao)
                values('".$nome."', ".$ADMcliente.", ".$ADMLivro.", ".$ADMUsuario.", ".$ativacao.")";
        
        if(mysqli_query($conex, $sql)){
            echo("<script> alert('Nível inserido com sucesso'); location.href = 'ADMusuario.php'; </script>");
        }else{
            echo("<script> alert('Erro ao tentar inserir nível'); location.href = 'cadastrarNivel.php'; window.history.back(); </script>");
        }
        
    }
    
    // ==================== CADASTRO DE USUARIO =========================
        
    if($_GET['modo'] == 'insertUsuario'){
        
        $nome = $_POST['txtNome'];
        $senha = md5($_POST['txtSenha']);
        $email = $_POST['txtEmail'];
        $nivel = $_POST['sltNivel'];
        $ativacao = 1;

        $sql="insert into tblusuario(nivel, nomeUsuario, senha, email, ativacao)
                values(".$nivel.", '".$nome."', '".$senha."', '".$email."', '".$ativacao."')";
        
        if(mysqli_query($conex, $sql)){
            echo("<script> alert('Úsuario inserido com sucesso'); location.href = 'ADMusuario.php'; </script>");
        }else{
            echo("<script> alert('Erro ao tentar inserir úsuario'); location.href = 'cadastrarUsuario.php'; window.history.back(); </script>");
        }
        
    }
    
}
?>
