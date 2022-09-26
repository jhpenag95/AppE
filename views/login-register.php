<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Regsitro-AppE</title>
    <link rel="stylesheet" href="../styles/Style-loginRegister.css">

    
    <!--====Fonts====-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="contenedorLoginRegister">
        <div class="background">
            <!--=====Login=====-->
            <div id="login">
                <h2>Ingresar</h2>
                <form action="../config/ingresar.php" method="POST">
                    <input class="inputs-info" type="email" name="emailLog" placeholder="Ingrese su Correo">
                    <input class="inputs-info" type="password" name="passwordLog" placeholder="Ingrese su Contraseña">
                    <input class="input-btn" type="submit" value="Ingresar">
                </form>
                <button class="linkRegistro" onclick="registro()">
                    Registrar
                </button>
            </div>

            <!--=====registro=====-->
            <div id="registro">
                <h2>Registrar</h2>
                <form action="../config/registro.php" method="POST">
                    <input class="inputs-info" type="text" name="userReg" placeholder="Ingrese su Usuario">
                    <input class="inputs-info" type="email" name="emailReg" placeholder="Ingrese su Correo">
                    <input class="inputs-info" type="password" name="passwordReg" placeholder="Ingrese su Contraseña">
                    <div class="fileImgen">
                        <p>Imagen</p>
                        <input class="inputs-foto" type="file" name="fotoPerfil" placeholder="Ingrese su Contraseña">
                    </div>
                    <input class="input-btn2" type="submit" value="Registrar">
                </form>
                <button class="linkLogin" onclick="ingresa()">
                    Ingresar
                </button>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script src="../script/ingresarRagistrar.js"></script>

</html>