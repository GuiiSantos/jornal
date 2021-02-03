<?php

function redirectToOtherFile ($fileName, $isAdmin) {
    if($isAdmin) {
        $url = isset($_GET["page"]) ? include_once($_GET["page"]): "inicio" ;
        $urlDivide = implode("/",$url);

    }else {
        $url = isset($_GET['page']) ? include_once($_GET["page"]): "login" ;
    }



}

function paginaSegura () {
   if ( isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioUsuario']) && isset($_SESSION['usuarioNome'])) {
    redirecionaParaOutraPagina("sair.php",false,0,false);
}
}

function redirecionaParaOutraPagina ($paraOndeVai, $alertaDaMensagem, $tempoDeMudarDePagina, $mensagemDeConfirmacaoDeLogin) {
    echo "<meta http-equiv='refresh' content='{$tempoDeMudarDePagina};URL=pags/{$paraOndeVai}'>";

    if ($alertaDaMensagem != false) {
        echo "<div class='alert alert-{$alertaDaMensagem}'>{$mensagemDeConfirmacaoDeLogin}</div>";
    }

}

?>