<?php
    $_SESSION['loggedin'] = false;
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $perfilTxt = "Perfil";
        $perfilLink = "perfil.html";
        $cartLink = "carrito.html";      
    } else {
        $perfilTxt = "Iniciar Sesión";
        $perfilLink = "login.html";
        $cartLink = "login.html";  
    }
?>