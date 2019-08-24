<?php

class loginController extends Controller {

    public function index() {

        $dados = array('erro' => '');

        $this->loadTemplate('login', $dados);
    }

    public function logout() {
        unset($_SESSION['cliente']);
        header("Location:/login");
    }

}
