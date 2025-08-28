<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introdução a variáveis e constantes</h1>
    <?php 
    $nome = "Nathali";
    $sobrenome = "Herpich";
    const PAIS = "Brasil";

    $nome = "Marina";
    $sobrenome = "Veiga";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . "!";

    //Atribuição de Variáveis
    //Variável pode mudar
    $idade = 17;
    $peso = 56.7;
    $casado = false;

    //Atribuições de Constantes
    const Curso = "TI";

    const _TX = 850;
    echo "Resultado = " . _TX;
    
    //Recomendações para dar nomes
    //Tente dar nomes claros e de fácil indentificação;
    //Evite nomes muito curtos ou muito longos;
    //Definir padrões de nomes: tudo maiúsculo ou minúsculo;
    //Variáveis = minúsculas;
    //Constantes = maiúsculas;
    //use camelCase para métodos e atributos;
    //Use SNAKE_CASE para nomear constantes;

    
    $nomeCompletoCliente = "Camel Case";
    $telefone_contato_fornecedor = "Snake case";
    
    

    ?>
</body>
</html>