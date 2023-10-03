<html>

<head>
    <meta charset="utf-8" />
    <title>CV Gonzalo Sumina Quispe</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="grid-container">
        <div class="grid-item1">
            <h1 class="Title">
                <?php echo $_POST["name"]; ?>
                <?php echo $_POST["lastname"];?>
            </h1>
            <h2 class="Subtitle">
                <?php echo $_POST["ocupacion"];?>
            </h2>
        </div>
        <div class="grid-item2">
            <h1>CONTACTO</h1>
            <h2>
                <?php echo $_POST["telefono"]; ?>
            </h2>
            <h2>
                <?php echo $_POST["email"]; ?>
            </h2>
            <h2>
                <?php echo $_POST["nacionalidad"]; ?>
            </h2>
            <h2>linkedin.com/gonzalo-sumina</h2>
            <br />
            <h1>IDIOMAS</h1>
            <h2>Español: Nativo</h2>
            <h2>Ingles: <?php echo $_POST["n_ingles"]; ?></h2>
            <h2><?php if (isset($_POST["Portugues"])){echo $_POST["Portugues"];} ?></h2>
            <h2><?php if (isset($_POST["Italiano"])){echo $_POST["Italiano"];} ?></h2>
            <h2><?php if (isset($_POST["otro"])){echo $_POST["otro"];} ?></h2>
            <br />
            <h1>Lenguajes de programacion</h1>
            <ul><li><?php echo $_POST["LP"]; ?></li></ul>
            <br />
            <h1>APTITUDES</h1>
            <ul>
                <li><?php echo $_POST["aptitudes"]; ?></li>
            </ul>
            <br />
            <h1>HABILIDADES</h1>
            <ul>
                <li><?php echo $_POST["hab1"]; ?></li>
                <li><?php echo $_POST["hab2"]; ?></li>
                <li><?php echo $_POST["hab3"]; ?></li>
            </ul>
            <br />
            <h1>OTROS INTERESES</h1>
            <ul>
                <li>Creador de yincanas</li>
                <li>Paseos ecologicos grupales</li>
                <li>Lectura grupal en ingles</li>
            </ul>
        </div>
        <div class="grid-item3">
            <h1>PERFIL</h1>
            <h2>
            <?php echo $_POST["perfil"]; ?>
            </h2>
            <br />
            <h1>EXPERIENCIA LABORAL</h1>
            <h2>
                <?php echo $_POST["exp_lbral"]?>
            </h2>
            <br />
            <h1>FORMACION</h1>
            <h2>
                <?php echo $_POST["Formacion"] ?>
            </h2>
            <br />
        </div>
        <div class="grid-item4">
            <img class="circular--square" src="foto-cv.png" id="Myimage" width="220" aling="center" />
        </div>
    </div>
</body>

</html>