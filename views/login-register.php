<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-AppE</title>
    <link rel="stylesheet" href="../styles/Style-loginRegister.css">

    <!--====Fonts====-->
    <!--====Fonts====-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="contenedorLoginRegister">
        <!--=====Login=====-->
        <div class="login">
            <h2>Ingresar</h2>
            <form action="">
                <input class="inputs-info" type="text" name="user" placeholder="Ingrese su Usuario">
                <input class="inputs-info" type="password" name="password" placeholder="Ingrese su Contraseña">
                <input class="input-btn" type="submit" value="Ingresar">
            </form>
            <button class="linkLogin" onclick="registrar()">
                <p>Registrar</p>
            </button>
        </div>

        <!--=====registro=====-->
        <div class="registro">
            <h2>registrar</h2>
            <form action="">
                <input class="inputs-info" type="text" name="user" placeholder="Ingrese su Usuario">
                <input class="inputs-info" type="email" name="email" placeholder="Ingrese su Correo">
                <input class="inputs-info" type="password" name="password" placeholder="Ingrese su Contraseña">
                <input class="input-btn" type="submit" value="Registrar">
            </form>
            <button class="linkRegistrar" onclick="registrar()">
                <p>Ingresar</p>
            </button>
        </div>
    </div>
</body>

</html>