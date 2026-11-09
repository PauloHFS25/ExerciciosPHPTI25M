<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar</title>
</head>
<body>
    <h1>Informe os valores que deseja celsius para fahrenheit: </h1>
    <form method="POST">
        <label>Informe o celsius: </label>
        <input type="number" id="celsius" name="celsius"/>
        <br><br>

        <button type="submit">Celsius para Fahrenheit
        <?php
            if(isset($_POST['celsius'])){
                $celsius = $_POST['celsius'];
            
                $resultado = $funcoes->celsiusParaFahrenheit($celsius);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['celsius'])){
            echo "O resultado da celsius para fahrenheit é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>