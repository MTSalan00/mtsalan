<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "brawlers_db";

$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_brawler = $_POST['nombre_brawler'];
    $rareza_id = $_POST['rareza_id'];
    $rol_id = $_POST['rol_id'];
    $habilidad_id = $_POST['habilidad_id'];
    $gadget_id = $_POST['gadget_id'];

    $sql = "INSERT INTO brawlers (nombre_brawler, rareza_id, rol_id, habilidad_id, gadget_id)
            VALUES ('$nombre_brawler', '$rareza_id', '$rol_id', '$habilidad_id', '$gadget_id')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p class='success'>Brawler agregado con éxito.</p>";
    } else {
        echo "<p class='error'>Error al agregar el Brawler: " . $conexion->error . "</p>";
    }
}

$sql_rareza = "SELECT * FROM rareza";
$resultado_rareza = $conexion->query($sql_rareza);
$sql_rol = "SELECT * FROM rol";
$resultado_rol = $conexion->query($sql_rol);
$sql_habilidad = "SELECT * FROM habilidad_estelar";
$resultado_habilidad = $conexion->query($sql_habilidad);
$sql_gadget = "SELECT * FROM gadget";
$resultado_gadget = $conexion->query($sql_gadget);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Brawler</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/brawl-stars" rel="stylesheet">
    <style>
        body {
            font-family: 'Brawl Stars', sans-serif;
            background-image: url('BrawlStars.jpg');
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            color: #FFFFFF;
        }
        h1 {
            color: #FFFF00;
            text-align: center;
            margin: 20px 0;
            text-shadow: 2px 2px #FF0000;
        }
        .navbar {
            background-color: #00B7EB;
            border: none;
        }
        .navbar-brand, .nav-link {
            color: #FFFFFF !important;
            font-size: 18px;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 50%;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
            color: #39FF14;
        }
        input[type="text"], select {
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            background-color: #FFFFFF;
            color: #000000;
        }
        input[type="submit"] {
            background-color: #FFFF00;
            color: #FF0000;
            border: 2px solid #39FF14;
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #39FF14;
            color: #FFFFFF;
        }
        .success {
            color: #39FF14;
            text-align: center;
            font-weight: bold;
        }
        .error {
            color: #FF0000;
            text-align: center;
            font-weight: bold;
        }
        .btn-brawl {
            background-color: #FFFF00;
            color: #FF0000;
            border: 2px solid #39FF14;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
            text-shadow: 1px 1px #000000;
        }
        .btn-brawl:hover {
            background-color: #39FF14;
            color: #FFFFFF;
        }
        .button-container {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <a class="navbar-brand" href="index.html">BRAWL STARS</a>
            <ul class="nav navbar-nav">
                <li><a href="Alan01.php">Mostrar Brawlers</a></li>
                <li><a href="Alan02.php">Agregar Brawler</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Agregar Nuevo Brawler</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre_brawler">Nombre del Brawler:</label>
            <input type="text" id="nombre_brawler" name="nombre_brawler" required>

            <label for="rareza_id">Rareza:</label>
            <select id="rareza_id" name="rareza_id" required>
                <?php while ($row = $resultado_rareza->fetch_assoc()) : ?>
                    <option value="<?php echo $row['rareza_id']; ?>"><?php echo $row['nombre_rareza']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="rol_id">Rol:</label>
            <select id="rol_id" name="rol_id" required>
                <?php while ($row = $resultado_rol->fetch_assoc()) : ?>
                    <option value="<?php echo $row['rol_id']; ?>"><?php echo $row['nombre_rol']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="habilidad_id">Habilidad Estelar:</label>
            <select id="habilidad_id" name="habilidad_id" required>
                <?php while ($row = $resultado_habilidad->fetch_assoc()) : ?>
                    <option value="<?php echo $row['habilidad_id']; ?>"><?php echo $row['nombre_habilidad']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="gadget_id">Gadget:</label>
            <select id="gadget_id" name="gadget_id" required>
                <?php while ($row = $resultado_gadget->fetch_assoc()) : ?>
                    <option value="<?php echo $row['gadget_id']; ?>"><?php echo $row['nombre_gadget']; ?></option>
                <?php endwhile; ?>
            </select>

            <input type="submit" value="Agregar Brawler">
        </form>
        <div class="button-container">
            <a href="Alan01.php" class="btn-brawl">Volver a Mostrar</a>
            <a href="index.html" class="btn-brawl">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>

<?php
$conexion->close();
?>