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
    <title>Area</title>
</head>
<body>
    <h1>Informe area do triangulo: </h1>
    <form method="POST">
        <label>Informe a base: </label>
        <input type="number" id="any" name="base"/>
        <br><br>

         <label>Informe a altura: </label>
        <input type="number" id="any" name="altura"/>
        <br><br>
        
        <button type="submit">Area
        <?php
            if(isset($_POST['base'])){
                $num1 = $_POST['base'];

            if(isset($_POST['altura']))
                $num2 = $_POST['altura'];
           
                $resultado = $funcoes->areaTriangulo($num1, $num2);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O resultado da area é: ".$resultado;
        }else{
            echo "Preencha os Campos!";
        }
        
    ?>
</body>
</html>