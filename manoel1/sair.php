<?php

session_start();

unset($_SESSION['id']);
unset($_SESSION['login']);
unset($_SESSION['tipo_usuario']);
 header("Location: login.php");



?> 
