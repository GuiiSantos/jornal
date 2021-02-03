<?php
class postsController extends controller {

    public function index() {
        echo "lista de postagem";
    }

    public function ver($nome, $sobrenome) {
        echo "seu nome é ".$nome." ".$sobrenome;
    }

}