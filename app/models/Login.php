<?php

class Login {
    public function getlogin() {
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

<<<<<<< HEAD
            if(($_REQUEST['username']=='admin') && ($_REQUEST['password']=='admin')) {
=======
            if (($_REQUEST['username'] == 'admin') && ($_REQUEST['password'] == 'admin')) {
>>>>>>> 49c00874b329fd85a4c342a4a31058b9bf935e29
                return 'login';
            } else{
                return 'Invalid User';
            }
        }
    }
}