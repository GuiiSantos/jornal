<?php
class homeController extends controller {

    public function index() {
        $usuario = new usuario();
        $usuario->getName();

        $dados["nomes"] = $usuario->getName();

        $this->loadTemplate("home", $dados);

    }

    public function sobre() {
        $dados = array();

        $this->loadTemplate("sobre", $dados);
    }

    public function login() {
        $dados = array();

        $this->loadViewTemplate("login",$dados);
    }
}

