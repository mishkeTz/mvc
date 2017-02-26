<?php 
use \PDO;

<<<<<<< HEAD
namespace App\Libraries;

require_once 'config.php';

use \PDO;
=======

>>>>>>> e8afe42dead147ebce9c6ac2e077a52e0a5708b0

class Database {

    public function __construct() {
     
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        // parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);

<<<<<<< HEAD
        $db = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, $options);
    }


=======
        $db = new PDO("mysql:host=127.0.0.1;dbname=mvc", 'root', '');
        
    }

>>>>>>> e8afe42dead147ebce9c6ac2e077a52e0a5708b0
}