<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuindo Strings</title>
</head>
<body>
    <h1>Strings</h1>
    <?php 
    $CURSO = "Curso";
    $PHP = "php\u{1F418}";
    echo $CURSO . $PHP. "<br>";

    $nome = "Nathali";
    echo "Olá $nome! <br>";


    const estado = "RS";
    echo "Moro no Estado do " . estado . "<br>";

    const ESTUDAR = "estudar \u{1F499} <br>";
    echo "Eu adoro " . ESTUDAR ;

    echo "Estamos no ano de " . date('Y') . "<br>";


    $nome = "Rodrigo";
    $snom = "Nogueira";
    echo "$nome\"Minotauro\" $snom <br>";

    $nome = "Nathali";
    $sobrenome = "Herpich";
    $apelido = "Nath";
    echo "$nome\"$apelido\" $sobrenome";

    $name = "PHP";
    //HEARDOC
    $year = date('Y');
    echo <<< FRASE

       <br> Estou estudando
                $name em $year

    FRASE;


    ?>
</body>
</html>