<?php

namespace App\Core;

class App {

    protected $controller = "home";                                          // OVO ce biti base/default ruta  koju cemo dobiti data pokrenemo bootstrap aplikacije

    protected $method = "index";                                             //i ao ukucamo pogresnu vrednost za kontroler ili metod on ce i dalje da nam vrati default vrednost koju imamo home/index i nece prikazati nikakve greske.

    protected $params = [];                                                  //ovo su parametri koji cemo kucati dalje u url adresi

    public function __construct( ) { 

        $url = $this->parseUrl();                                           //svi parametri koje unesemo u url ce biti u ovoj promenljivoj,koju mozemo koristiti dalje
        
        
        if(file_exists('../app/controllers/'.$url[0].'.php')) {             //proverava da li postoji kontroler kojim hocemo da pristupimo u ovom slucaju url[0] odnosno kontroler koji unosimo ako postoji:
            $this->controller = $url[0];                                    //postavljamo taj kontroler u promenljivu $controller, url[0] je kontrolor koji upisujemo u adresu i sa ovim dobijamo, da ono sto upisemo ce staviti u mesto [0] u nizu to je kontrolor u adresi,broj [1] 
            unset($url[0]);                                                 // unset skida tu vrednosti iz niza,nista vise
        }                                                                   //nakon sto se ovaj kod tacno izvrsi mi hocemo da require_once novi kontroler
        require_once '../app/controllers/'. $this->controller .'.php';
        
        $this->controller = new $this->controller;                          //napravili smo novu instancu kontrolora ,imamo novi objekat, koji cemo da koristimo da bi proverili metod
        
        if (isset($url[1])){
            if(method_exists($this->controller, $url[1])) {                 //method exist prima dva parametra objekat i metod name u tom objektu
                
                $this->method = $url[1];
                unset($url[1]);                                             //ako ne uradimo unset napravice se jos jedan niz nama taj niz ne treba
            }
        }

        
        $this->params = $url ? array_values($url) : [];                     //proverava da li url uopste ima neki sadrzaj u suprotnom daje objekat, ako ne stavimo objekat ocekivace da ima jednu stavku u nizu i izbaci ce gresku
        //sve ovo je beskorisno ako ne pozovemo parametre:
        call_user_func_array([$this->controller, $this->method], $this->params); // ova funkcija prihvata sva tri parametra kontroler metod i params i to ce pozvati metodu
    }
    public function parseUrl() {                                            //ova funkcija ce url koji imamo da izvrsi sanatize trim i explode to ce nam dati potpuno novi url,po redosledu 1.kontroler 2.metod 3.parametar, localhost/<filename>/<filename>/kontroler/metod/param/param2/param3
        if(isset($_GET['url'])) {                                           //mi cemo pokupiti sa $_GET['url'] taj url, kroz htaccess i prosledili ga kao $_GET['url'] varijablu
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
