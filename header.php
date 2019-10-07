<?php include_once("config/variaveis.php") ?>

<header>
        <div class="navbar">
            <h1 id="logo">
            <?php echo $nomeSitema;?>
            </h1>
            <nav>
            <ul class="nav">
                <?php if (isset($usuario) && $usuario != "") {?>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario{'nome'}; ?></a>
                    </li>
                <?php }else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                <?php } ?>
                </ul>
            </nav>
        </div>
        <div class="navbar bg-dark text-white justify-content-center">
            <ul class="nav">
                    <?php foreach($caixas as $caixas) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $caixas; ?></a>
                </li>
                    <?php } ?>
            </ul>

            <!-- <ul class="nav justify-content-center">
                    <li class="nav-item">
                            <a class="nav-link active" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Palestras</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Artigos</a>
                    </li>
            </ul>-->

            <nav>
            </nav>
        </div>
    </header>