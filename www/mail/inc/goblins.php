<?php

/* Pequeno programa para deixar as mensagens do formulário de contato um pouco
 * mais divertidas.
 */


function FindGoblin() {
    $goblins = [
        'Rilget Botgob',
        'Rixtee Gigaskimmer',
        'Malax Pickbub',
        'Niinkle Hardgrinder',
        'Wizdaxiz Hagglebasher',
        'Kinamo Sharphead',
        'Wixvaxeez Megarocket',
        'Jexard Saltywrench',
        'Jazyx Sharpfingers',
        'Bamix Saltpot',
        'Riivazy Multirocket',
        'Zotigle Pepperpot',
        'Wizinkle Mudboot',
        'Roixle Fizzlehead',
        'Jixvaix Shadowcash',
        'Ziyx Multiblaster',
        'Greexbeto Megablast',
        'Soxidxiz Scrollblaster',
        'Zelax Greasehallow',
        'Zeil Botwatts',
        'Pyxiekzey Greasybuttons',
        'Izzizel Boomnose',
        'Mygzey Farblade',
        'Kinette Mancash',
        'Mexzel Fasthead',
        'Guiyx Goldhallow',
        'Fizgasal Grappletongue',
        'Sallee Rustracket',
        'Mexgiwyz Boomfuel',
        'Ixlyz Pickpocket',
        'Mintwyx Megawatts',
        'Amyynee Bolttweak',
        'Slikinez Gigawizzle',
        'Pivazey Botsprocket',
        'Amydeiz Saltclamp',
        'Ypini Kneenose',
        'Slilez Hardtooth',
        'Lykabels Sharpgrinder',
        'Caltwinkle Peppergrubber',
        'Meibxy Fastblaster',
    ];
    // Escolhe um goblin aleatoriamente da lista
    $escolhido = mt_rand(0, count($goblins) - 1);

    // Mensagens possíveis que o goblin vai usar ao receber uma tarefa (no caso entregar uma mensagem)
    $goblin_mens = [
        "Olá Senhora, um cliente acaba de te contactar:",
        "ZZZzzz tem... mensagem... nova... ZZZzzzzZZZ:",
        "Mademoiselle, venho por meio desta encaminhar a mensagem de seu estimado cliente:",
        "Grarwwrr! ",
        "(nhoc, nhoc, nhoc) tem coisa (nhoc) aí pra você... (nhoc, nhoc, nhoc)",
        "uhul! mensagem! mensagem! uhuuuulllll!!!",
        "Tem alguém te enchendo o saco... E me deixa dormir, pelas barbas de Merlin!",
        "Que noob, esse aqui não sabe desenhar hohohohoho:",
        "Chegou correspondência... Ai... cadê... (Clank! Crash! Meoooowww! Bléin) Ah, aqui está!",
        "Nossa senhora... Tá uma zona esse lugar... Achei isso aqui. Acho que lhe pertence:",
        "(suspiro) Não aguento mais essa vida... Queria ser cientista, virei carteiro... (suspiro)"
    ];
    
    // Escolhe uma mensagem aleatoriamente da lista
    $msg = mt_rand(0, count($goblin_mens) - 1);

    // Aloca a mensagem e o goblin em um array
    $trabalhadores = [
        "nome" => $goblins[$escolhido],
        "mensagem" => $goblin_mens[$msg]
    ];

    return $trabalhadores;
}

# DEBUG
//$goblin = FindGoblin();
//
//echo $goblin['nome'];
//echo "<hr>";
//echo $goblin['mensagem'];
//var_dump($goblin);

