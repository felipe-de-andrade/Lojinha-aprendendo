<?php 
$nomeSistema = "Site Top";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lojinha</title>
</head>
<body>
 <header>
    <div class="container d-flex justify-content-between align-items-center">
    <h1><?php echo $nomeSistema?></h1>
    <nav>
    <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#about">
                    Cursos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    Projetos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    Login
                </a>
            </li>
        </ul>
    </nav>
    </div>
 </header>
    <?php
    $nome = "Felipe";
    $idade = 17;
    $usuario = ["Felipe","Andrade","17", " ", ["main nain", "putz"]];

    $usuarioDois = ["nome" => "Felipe", "sobrenome" => "Andrade", "idade" => 17 ];

    //var_dump($usuario);

    $usuario[] = "Guitarra";

     echo "<br>";

    //var_dump($usuario);
     echo  $usuario[0];
     echo  $usuario[3];
     echo  $usuarioDois["sobrenome"];

     echo "<br>";

     $numero = 1;
     switch($numero) {
         case 15:
         echo "o nomero é igual a 1";
         break;
         case 1:
         echo "o numero é igual é maior que 1";
         break;
         default:
         echo "nada deu certo bixo, se fode ai";
         break;
     }

    ?>
</body>
</html>