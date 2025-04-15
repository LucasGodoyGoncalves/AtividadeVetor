
<?php
$time = $_POST['tm'];


if($time == 1)
{
    $frases = array('51 é pinga', 
    'Quando surge o alviverde imponente<br>
    No gramado em que a luta o aguarda<br>
    Sabe bem o que vem pela frente<br>
    Que a dureza do prélio não tarda!', 'Craque da pelota');

    $fe = $frases[rand(0, count($frases)-1)];

    echo "$fe";
}

else if($time == 2)
{
    $frases = array('Tudo ladrão', 'Timão', 
    'Salve o Corinthians<br>
    O campeão dos campeões<br>
    Eternamente<br>
    Dentro dos nossos corações');

$fe = $frases[rand(0, count($frases)-1)];

    echo "$fe";
}

else if($time == 3)
{
    $frases = array('Neymar Futebol Clube 2025', 'Caiu na Vila, o Peixe fuzila', 
    'Sou alvinegro da Vila Belmiro<br>
    O Santos vive no meu coração<br>
    É o motivo de todo o meu riso<br>
    De minhas lágrimas e emoção');

$fe = $frases[rand(0, count($frases)-1)];

    echo "$fe";
}

else if($time == 4)
{
    $frases = array('Time de boiola', 'São paulino ou São paulista?', 
    'Salve o Tricolor Paulista<br>
    Amado clube brasileiro<br>
    Tu és forte, tu és grande<br>
    Dentre os grandes, és o primeiro<br>
    Tu és forte, tu és grande<br>
    Dentre os grandes, és o primeiro');

$fe = $frases[rand(0, count($frases)-1)];

    echo "$fe";
}

else
{
    echo "É pra escolher um dos números que tá na tela Burrão!!";
}

?>
