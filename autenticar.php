<?php
    //Busca arquivo de conexão com banco de dados
    require_once("conexao.php");
    @session_start();
//variáveis de usuario e senha
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//seleciona a tabela usuários no banco de dados para autenticar
$query = $pdo->query("SELECT * FROM usuarios where (email = '$usuario' or cpf = '$usuario') and senha = '$senha' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);
//Condição para autenticar 
if($total_reg > 0){
    $_SESSION['nome_usuario'] = $res[0]['nome'];
    $_SESSION['id_usuario'] = $res[0]['id'];
    $_SESSION['nivel_usuario'] = $res[0]['nivel'];
    $_SESSION['cpf_usuario'] = $res[0]['cpf'];
    $_SESSION['email_usuario'] = $res[0]['email'];

    //encaminha para a página home se existir registro no banco de dados
    echo "<script>window.location='home'</script>";
}else{//caso não existir exibe mensagem de erro e retorna para página de login
    echo "<script>window.alert('Usuário ou Senha Incorretos!')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>