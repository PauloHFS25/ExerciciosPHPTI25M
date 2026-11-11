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
    <title>dobro</title>
</head>
<body>
    <h1>Informe os valores que deseja anos: </h1>
    <form method="POST">
        <label>Informe o anos: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">anos
        <?php
            if(isset($_POST['primeiroNumero'])){
                $anos = $_POST['primeiroNumero'];
                
                $resultado = $funcoes->idade($anos);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O anos é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>