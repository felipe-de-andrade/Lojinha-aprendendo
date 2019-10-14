<?php 


function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
    $nomeArquivo = "produto.json";
    if(file_exists($nomeArquivo)){
        
        $arquivos = file_get_contents($nomeArquivo);

        $produtos =json_decode($arquivos, true);

        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagem"=>$produtos];
        $json = json_encode($produtos);
        $deuCerto = file_put_contents($nomeArquivo, $json);

        if ($deuCerto){
        return"Deu certo mem";
        } else{
        return "Não deu certo se vira ai men";
        }

        var_dump($produtos);
    }else{
        $produtos = [];
        //array_push()
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "imagem"=>$produtos];
        $json = json_encode($produtos);
        $deuCerto = file_put_contents($nomeArquivo, $json);

        if ($deuCerto){
        return"Deu certo mem";
        } else{
        return "Não deu certo se vira ai men";
        }
    }
}

if($_POST){
//salvando arquivo
$nomeIMG = $_FILES['imgProduto']['name'];
$localTemp = $_FILES['imgProduto']['tmp_name'];
$caminhoSalvo = 'img/'.$nomeIMG;

$deuCerto = move_uploaded_file($localTemp, $caminhoSalvo);
exit;
    cadastrarProduto($_POST['nomeProduto'], $_POST['descProduto'], $_POST['imgProduto'],$_POST['precoProduto']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Dos Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
            <h1>Cadastro produto</h1>            
            </div>
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto"></input>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="descrição do Produto"></input>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="imagem do Produto"></input>
                    </div>
                    <div class="form-group">
                        <input type="nunber" class="form-control" name="precoProduto" placeholder="preço do Produto"></input>
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>