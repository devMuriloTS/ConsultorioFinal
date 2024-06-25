<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleC.css">
    <title>Cliente</title>
</head>
<body>
    <div class="header">

    <header>
            <div class="icon">
                <!-- icone de medicina e titulo -->
                <img height="40px" src="medicina.png"> 
            </div>
            <h1>Consultório dr. Murilo</h1>
        
    </header>

    <!-- botoes para navegar pelo site -->
    <nav>
        <div class="as">
        <a href="index.php">Voltar ao Inicio</a>
        </div>
    </nav>

    </div>

    <div class="cadastro">
        <h2>Cadastro de cliente</h2> <br>

        <form action="" method="POST">
            <label for="nome">Nome:</label>
            <input class="textbox" type="text" id="nome" name="nome" required>
            

            <label for="ano">Ano nascimento:</label>
            <input class="textbox" type="number" id="ano" name="ano" maxlength="4" required>
           

            <label for="peso">Peso:</label>
            <input class="textbox" type="number" id="peso" name="peso" maxlength="5" step="0.01" required>
            

            <label for="altura">Altura:</label>
            <input class="textbox" type="number" id="altura" name="altura" maxlength="5" step="0.01" required>
            

            <button class="buttonForm" role="buttonForm" type="submit"><span class="text">Imprimir</span></button>
        </form>
        
    </div>

    <div class="resposta">
            <?php
            
            require '../backend/consultorio.php';

            $cliente = new Consultorio();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST['nome']) && isset($_POST['ano']) && isset($_POST['peso']) && isset($_POST['altura'])) {
                    $nome = $_POST['nome'];
                    $peso = $_POST['peso'];
                    $ano = $_POST['ano'];
                    $altura = $_POST['altura'];

                    $erro = empty($nome) || empty($peso) || empty($ano) || empty($altura) ? "Preencha todos os seu dados" : ((!is_numeric($peso) || (!is_numeric($altura) || (!is_numeric($ano) || $peso <= 0 || $ano <= 1920 || $ano > 2024 || $altura <= 0) ? "Insira valores válidos" : "")));
                    if ($erro) {
                        echo $erro;
                    } else {
                        $cliente -> setNome($nome);
                        $cliente -> setAno($ano);
                        $cliente -> setPeso($peso);
                        $cliente -> setAltura($altura);

                        $cliente -> calcularIdade($ano);
                        $cliente -> calcularImc($peso, $altura);

                        $cliente -> imprimeResultado();

                    }
                } else {
                    echo "Formulário não enviado corretamente.";
                }
            }

            ?>
        </div>
    
</body>
</html>