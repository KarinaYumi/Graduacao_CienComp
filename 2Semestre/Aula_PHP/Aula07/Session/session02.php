<?php
    session_start();

    if(isset($_GET['destruir']) && ($_GET['destruir'] == "sim")) { //isset verifica se está configurada a variável, no nosso caso a 'destruir'
        
        session_destroy();
        header("Location: session02.php"); //Redireciona pra mesma página. No nosso caso, está indo pra mesma, ou seja meio que recarregando ela
    }

    echo($_SESSION['sessao']);
    echo("<a href='session02.php?destruir=sim'>Destuir Sessão</a>");

?>