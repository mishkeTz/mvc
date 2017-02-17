<?php

class Contact extends Controller {
    public function index() {
        echo "Contact index, ovaj ceo file ne bi mogao da postoji"."<br />"."Kada ne bismo pozvali njegovo ime samog file-a u url-u"."<br />"."To ime je kontroler ,njegova klasa je metod,i ostalo posle su parametri"."<br />"."Ja pisem ovu poruku u metodu index, koji se podrazumevano otvara";
    }
    public function phone() {
        echo "Phone contacts";
    }
}