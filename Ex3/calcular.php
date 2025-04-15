
<?php
$mf = $_POST['mf'];


if($mf == 1)
{
    $frases = array('Meu fi qué joga di bola?', 'O ignorante afirma, o sábio duvida, o sensato reflete', 'Vamos pular <br>
    A parte que eu peço aquele vinho do bom<br>
    A taça não merece tirar seu batom<br>
    Deixa comigo, que pra isso eu tenho o dom<br>');

    $fe = $frases[rand(0, count($frases)-1)];

    echo "$fe";
}

else if($mf == 2)
{
    $frases = array('Jesus te ama!!', 'Você arrasa mona!!!!!!', 'A pia tá cheia de louça<br>
    O banheiro parece que é de botequim<br>
    A roupa toda amarrotada<br>
    E você nem parece que gosta de mim<br>');

$fe = $frases[rand(0, count($frases)-1)];

    echo "$fe";
}

else
{
    echo "É 1 ou 2 Burrão!!";
}

?>
