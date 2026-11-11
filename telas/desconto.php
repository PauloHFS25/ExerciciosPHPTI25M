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
    <h1>Informe os valores que deseja ter desconto: </h1>
    <form method="POST">
        <label>Informe o valor: </label>
        <input type="number" id="valor" name="valor"/>
        <br><br>

        <button type="submit">Desconto
        <?php
            if(isset($_POST['valor'])){
                $celsius = $_POST['valor'];
            
                $resultado = $funcoes->desconto($celsius);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['valor'])){
            echo "O valor do produto é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>