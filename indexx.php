<?php 
include_once("config/variaveis.php");

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
     <?php include_once("header.php"); ?>
    <main>
        <section class="container">
            
                <div  class="d-flex justify-content-center main" style="">
                <?php if(isset($produtos) && $produtos != []) {?>
                    <?php foreach($produtos as $produto){ ?>
                        <div class="card text-center mr-4">
                            <h2><?php echo $produto['nome']; ?></h2>
                            <img id="foto" src="<?php echo $produto['img']; ?>" class="card-img-top" alt="curso de t.i.">
                            <div class="card-body">
                                <h5 class="card-text"><?php echo $produto['preco']; ?></h5><br>
                                <a link href="carrinho.php?nomeProduto=<?php echo $produto['nome'];?>">Comprar</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <h1>Não tem produtos cadastrados nessa sessão :( </h1>
                <?php } ?>
                    </div>
        </section>
    </main>
</body>
</html>