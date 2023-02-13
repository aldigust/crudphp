<?php 

session_start();

function checkAuth() {
    if (isset($_SESSION['login'])) {
        return true;
    }
    
    return false;
}

?>