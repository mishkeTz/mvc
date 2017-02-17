<?php

class Home extends Controller {
    public function index() {
        echo 'home/index';
    }

public function test() {
    echo "test";
    }
public function ParamProblem($name = '') {
        echo $name;
    }
}
/*
Funkcija ParamProblem nam sluzi za parametar u url-u posle metode:
ako samo ukucamo parametar posle metoda desice se nista, ijako se taj parametar zapravo prosledio, mi smo ga prosledili u App.php folderu, 35. linija koda, sad dolazi na scenu ova metoda koju pisemo, zato sto smo u app.php na 35. liniji uzeli parametre ali nismo ih koristili sada u $name promenljivoj cemo ih dodeliti, samim tim sto cemo pozvati ovaj kontroler metodu i upisati bilo ko je ime, koje ce stati u $name
*/