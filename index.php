<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Formulário</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/estilo.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
    <header>
	<div class="center">
        <h1>Envio de formulário</h1>
	</div><!-- center -->
    </header>
        <div class="content">
            <div class="box-content w50">
                <div class="result">
                    <h1>Enviado com sucesso! <i class="fas fa-paper-plane"></i></h1>
                    <div class="icone">
                        <i class="far fa-smile-wink"></i>
                    </div>
                </div>
            <h1>Preencha o formulário</h1>
                <form method="post">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                    <label>Idade:</label>
                    <input type="number" name="idade" id="idade" required>
                    <label>E-mail:</label>
                    <input type="email" name="email" id="email" required>
                    <input type="submit" value="Enviar">
                </form>
            </div><!-- box-content -->
            <div class="clear"></div>
        </div><!--content-->
    <footer>
        <p>&copy; <a href="http://multipliquex.online"><?php echo NOME_EMPRESA ?>.online</a></p>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/jquery.js"></script>
    <script src="https://kit.fontawesome.com/3e442d7cea.js" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/formulario.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/script.js"></script>
</body>
</html>