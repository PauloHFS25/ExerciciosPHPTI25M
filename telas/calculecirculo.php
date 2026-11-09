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
    <h1>Informe os valores que deseja calcule circulo: </h1>
    <form method="POST">
        <label>Informe o raio: </label>
        <input type="number" id="raio" name="raio"/>
        <br><br>

        <button type="submit">Calcule Círculo
        <?php
            if(isset($_POST['raio'])){
                $raio = $_POST['raio'];
            
                $resultado = $funcoes->calcularAreaCirculo($raio);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['raio'])){
            echo "O resultado da calcule circulo é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>