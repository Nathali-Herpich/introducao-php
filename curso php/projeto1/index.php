<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com Switch</title>
</head>
<body>
    <h1>RPG</h1>
    <form method="POST" action="">
        <label>Escolha uma opção:</label><br>
        <select name="opcao">
            <option value="1">Arqueiro</option>
            <option value="2">Mago</option>
            <option value="3">Elfo</option>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
    //OBRIGATÓRIO TER ESTA PARTE DO CÓDIGO PARA NÃO TER ERRO
    if (isset($_POST['opcao'])) {
    //

        $opcao = $_POST['opcao'];

        switch ($opcao) {
            case "1":
                echo "Você selecionou o Arqueiro";
                break;

            case "2": 
                echo "Você selecionou o Mago";
                break;   

            case "3": 
                echo "Você selecionou o Elfo";
                break;

            default:
                echo "Opção inválida";
                break;    
        }
    }
    ?>
</body>
</html>
