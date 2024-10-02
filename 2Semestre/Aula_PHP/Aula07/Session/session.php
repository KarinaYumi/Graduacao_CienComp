<?php
/*  
SESSION (variável persistente) - $_SESSION['nome']

    Encerrar sessão - 3 modos: Fechar o navegador(ele apaga o ID da sessão)
                               Tempo de inatividade
                               A qualquer momento o dev pode encerrar a sessão (logout/log off) -> session_destroy();

    Inicialidar sessões- Necessário iniciar com a função session_start();

*/
    session_start();

    $_SESSION['sessao'] = "Configurado";
    echo("Sessão configurada!");

?>