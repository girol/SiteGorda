<?php

header('Content-Type: text/html; charset=utf-8');

//include './stubs/post_inputs.php';


if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])):


    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Adiciona o programa Goblins Treinados :D
    require './inc/goblins.php';

    // Pega requisita um goblin no meio da galera
    $goblin = FindGoblin();

    // Inclui informações do envio do email
    require './inc/mailconfig.php';



    // Stub
//    echo $mail->Body;
//    echo '<hr>Email enviado!';
//    var_dump($mail);

    if (!$mail->send()):
        header('location:mailsent.php?err=1');
        // Implementar
        //echo 'Erro-> ' . $mail->ErrorInfo;
    else:
        header('location:mailsent.php?err=0');
    endif;

else:
    //echo "há coisas não preenchidas";
    header('location:../index.html');
endif;
