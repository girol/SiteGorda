<?php
//Inicializando variável de mensgem
$msg = "";

// Verifica se o GET foi preenchido:
if (array_key_exists('err', $_GET)):
    $erro = $_GET['err'];

    if ($erro == 1):

        $msg = '<h2>Algo deu errado... :(</h2>
            <p>
                Peço desculpas pelo transtorno...<br>
                Você poderia <a href="../index.html#contact" title="Voltar ao Site">tentar novamente</a> enviar a mensagem?<br>
            </p>
            <p>
                Você pode também enviar um email diretamente para:<br>
                <a href=mailto:oi@nayararibeiro.com.br>oi@nayararibeiro.com.br</a>
            </p>';
        else:

        $msg = '<h2>Muito obrigada pela mensagem!</h2>
            <p>
                Assim que possível entrarei em contato!<br>
                <a href="../index.html" title="Voltar ao Site">Voltar ao Site</a>
            </p>';

    endif;
else:
//    $msg = "ninguém preencheu nada";
    header('location:../index.html');
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Nayara Ribeiro | Design e 3D</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="inc/messages.css" />


    </head>

    <body>
        <div class="container">
            <h1></h1>
            <img src="inc/logo.png" alt="Logo Nayara Ribeiro" height="200" width="200">


<?= $msg ?>  

        </div>


    </body>
</html>

