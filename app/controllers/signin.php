<?php


class Signin extends Controller {
    public function index()
    {
        $this->view("login/welcome");
    }

    public function login()
    {
        $this->view("login/login");
    }
}