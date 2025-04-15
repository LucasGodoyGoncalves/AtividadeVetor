<?php
$cor = array("Azul", "Vermelho", "Verde", "Amarelo");
$ce = $cor[rand(0, count($cor)-1)];

if($ce == "Azul")
{
    echo "Azul: Essa cor lembra a liberdade dos céus";
}

else if($ce == "Vermelho")
{
    echo"Vermelho: Essa cor é bem agressiva e sexy ;)";
}

else if($ce == "Verde")
{
    echo"Verde: Essa cor remete a natureza";
}

else if($ce == "Amarelo")
{
    echo"Amarelo: Essa cor transmite alegria e felicidade";
}

?>
