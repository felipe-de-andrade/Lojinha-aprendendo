<?php  

$usuario = ["email"=>"felipe.andrade_@hotmail.com","senha"=>'$2y$10$S4SMXB3oeBz4UroJBOlW9uosEsi8b1vigPBnAlfkZndUteVuUAHje'];

if($_POST){
    $email = $_POST['email'];
    $senha =$_POST['senha'];
        //validando email
    if($email == $usuario['email']){
        //validando a senha
        if(password_verify($senha, $usuario['senha'])){
            session_start($_SESSION)
            header('Location:indexx.php');
            
        }else{
            echo "Email ou senha invalida";
        }
    }else{
        echo "Email ou senha invalida";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class ="d-flex justify-content-center align-items-center p-5">
        <form action = "login.php" method ="post" class="card p-2">
            <div class ="form-group">
                <label type="email">Email</label>
                <input type="email" name="email" id="senha" class="form-control" required></input>
            </div>
            <div class ="form-group">
                <label type="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" required></input>
            </div>
            <div class ="form-group">
                <button class ="btn btn-success" type="submit">logar</button>
            </div>
        </form>
    </main>
    <section></section>
    <footer></footer>
</body>
</html>