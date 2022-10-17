<?php

$mensagem = "Estou com sede!";
$senha = "0123456789";

$titulo = "Meu site - Contatos";
$idade_do_aluno = 24;
$idadeDoAluno = 24;
$CASA = 'Amarelo';
$casa = 'azul';

$cnpj = '0125485755525';

$amarelo = true;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
</head>
<body>
    
<?php echo "Olá terra!"; echo "Olá planeta" ?>


<?php

echo somar(10, 2);

echo "Olá mundo!";

echo '<p> Estou aqui!</p>';

// echo `E você?`; Isso está errado.

/*
Este comentário
tem várias linhas */

   /* uma linha só*/

   echo $mensagem;

   echo 18;

   echo $idade_do_aluno;

?>

</body>
</html>
<?php

echo 'Acabou!';

echo $idadeDoAluno;

// concatenar = junçao de strings //
echo '<br>' . $CASA . "<br>" . $casa . '<br>';

// echo "<br>{$CASA}<br>{$casa}<br>"; -> Interpolação


if($amarelo) {
    echo '<p>Amarelo</p>';
}else {
    echo '<p>Sem cor</p>';
}

$idade_do_aluno = "vinte e cinco anos";

echo '<br>' . $idade_do_aluno;

// define('casa', 'amarela'); -> Constante já criada antes...

// echo '<h1>' . casa . '</h1>';



// Função que soma dois valores e exibe o resultado no navegador:
function somar($val1, $val2) {
    $soma = $val1 + $val2;
    return $soma;
}



?>