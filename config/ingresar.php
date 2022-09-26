<?php
    session_start();
    
    include 'database.php';

    $email = $_POST['emailLog'];
    $contrasena  = $_POST['passwordLog'];
    $contrasena = hash('sha512',$contrasena);


    $validarLog = mysqli_query($conexion, "SELECT  * FROM usuarios WHERE
     email='$email' and contrasena='$contrasena'");

    if (mysqli_num_rows($validarLog) > 0) {
        $_SESSION['usuario'] = $email;  //validar que haya iniciado sesion
        header("location: ../views/dashboardHome.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no se encuentra creado, por favor veririca los datos !!");
            window.location="../index.php";
        </script>
        ';
        
        exit;
    }

?>