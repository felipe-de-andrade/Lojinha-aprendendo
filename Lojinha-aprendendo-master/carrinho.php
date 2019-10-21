
<?php
$nomeSitema = "Cursos Aí!";
$usuario = ["nome"=>"Felipe"];

$caixas =["Cursos","Palestras","Artigos"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop DH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>

<?php include_once("header.php") ?>

    <main>
        <section class="container">
            <div class="row">
                <div class="col-12"> 
                        <h1>Carinho de Compras</h1>
                </div>
            </div>
            <div class ="col-12">
                <div class="row-card">
                    <div class="col-12">
                    <h3>voce esta comprando o curso <?php echo $_GET['nomeProduto'];?><h3>
                    </div>
                        <div class ="col-lg-6 col-md-6">
                            <form class ="d-flex flex-column p-3"method="post" action ="sucesso1.php">
                                <input type="text" name="nomeCompleto" placeholder="Digite seu nome"></input>
                                <input type="text" name="CPF" placeholder="Digite seu CPF"></input>
                                <input type="number" name="number" placeholder="Digite o numero do seu cartão"></input>
                                <input type="date" name="validadeCartao" placeholder="Digite a data de validade"></input>
                                <input type="passaword" name="codigoCartao" placeholder="Digite o CV"></input>
                                <button class="btn btn-success" type="submit">Finalizar compra</button>
                            </form>
                        </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>