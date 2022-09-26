<?php

    include 'database.php';
    /**========Registro de Usuario========== */
   
    $user = $_POST['userReg'];
    $email = $_POST['emailReg'];
    $contrasena = $_POST['passwordReg'];
    $contrasena = hash('sha512',$contrasena);//encriptar contraseña
    $imgPer = addslashes(file_get_contents($_FILES['fotoPerfil']['tmp_name']));

    // if (isset($_POST['input-btn2'])) {
    //     $ruta = "../fotosdePerfil";
    //     $fichero = $ruta.basename($_FILES['fotoPerfil']['name']);
    //     if (move_uploaded_file($_FILES['fotoPerfil'][tmp_name], $ruta.$_GET['id'])) {
    //         echo "subio";
    //     }
    // }

    $query = "INSERT INTO usuarios(nombre_usuario,email,contrasena,imgPer) 
            VALUES('$user','$email','$contrasena','$imgPer')";

     //validar que el correo no se repita en base de datos
    $validaCorreo = mysqli_query($conexion,"SELECT  * FROM usuarios WHERE email='$email'");
    
    if (mysqli_num_rows($validaCorreo) > 0) {
        echo'
            <script>
            alert("Este correo ya esta registrado, intenta con otro");
            window.location = "../views/login-register.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }


     //validar que el usuaria no se repita en base de datos
     $validaUser = mysqli_query($conexion,"SELECT  * FROM usuarios WHERE nombre_usuario='$user'");
     if (mysqli_num_rows($validaUser) > 0) {
         echo'
             <script>
             alert("Este usuario ya esta registrado, intenta con otro");
             window.location = "../views/login-register.php";
             </script>
         ';
         exit();
         mysqli_close($conexion);
     }





    //ejectura las accion para que guarde dato
    $ejecutar = mysqli_query($conexion, $query);

   
    if ($ejecutar) {
        echo '
        <script>
        alert("Usuario Registrado");
        window.location = "../views/login-register.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("Usuario no registrador, por favor revise!!");
        window.location = "../views/login-register.php";
        </script>
        ';
    }
    mysqli_close($conexion);




?>