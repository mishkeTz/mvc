<?php 

namespace App\Libraries;

require_once 'config.php';

use \PDO;

class Database {

    public function __construct() {
     
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        // parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);

        $db = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, $options);
    }


}