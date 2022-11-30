<?php
    session_start();
    session_destroy();//elimina los datos de la sesión y regresa a index.php

    header('Location: index.php');
?>