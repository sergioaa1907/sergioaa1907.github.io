<?php
    $destino = "sergiosanh1907@gmail.com";
    $name = $_POST['name'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $provincia = $_POST['provincia'];
    $customRadio = $_POST['customRadio'];
    $textarea = $_POST['textarea'];
    $contenido = 'name: '. $name . '\napellidos: ' . $apellidos . '\email' $email . '\provincia' $provincia . '\customRadio' $customRadio . '\textarea' $textarea; 
    mail($destino, "Contacto", $contenido);
    header("Location: Gracias.html")
?>