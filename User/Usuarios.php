<?php
    $_SESSION['loggedin'] = true;

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $perfilTxt = "Iniciar Sesión";
        $perfilLink = "login.html";
    } else {
        $perfilTxt = "Perfil";
        $perfilLink = "perfil.html";
    }
?>