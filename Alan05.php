<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "brawlers_db";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

$sql = "SELECT b.brawler_id, b.nombre_brawler, r.nombre_rareza, ro.nombre_rol, h.nombre_habilidad, g.nombre_gadget
        FROM brawlers b
        JOIN rareza r ON b.rareza_id = r.rareza_id
        JOIN rol ro ON b.rol_id = ro.rol_id
        JOIN habilidad_estelar h ON b.habilidad_id = h.habilidad_id
        JOIN gadget g ON b.gadget_id = g.gadget_id";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawlers de Brawl Stars</title>
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
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 2px solid #39FF14;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #39FF14;
        }
        th {
            background-color: #FF0000;
            color: #FFFFFF;
        }
        tr:nth-child(even) {
            background-color: #00B7EB;
        }
        tr:nth-child(odd) {
            background-color: #FFFFFF;
            color: #000000;
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
        <h1>Brawlers de Brawl Stars</h1>
        <?php if ($resultado->num_rows > 0) : ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rareza</th>
                    <th>Rol</th>
                    <th>Habilidad Estelar</th>
                    <th>Gadget</th>
                </tr>
                <?php while ($fila = $resultado->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $fila['brawler_id']; ?></td>
                        <td><?php echo $fila['nombre_brawler']; ?></td>
                        <td><?php echo $fila['nombre_rareza']; ?></td>
                        <td><?php echo $fila['nombre_rol']; ?></td>
                        <td><?php echo $fila['nombre_habilidad']; ?></td>
                        <td><?php echo $fila['nombre_gadget']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else : ?>
            <p>No se encontraron Brawlers.</p>
        <?php endif; ?>
        <div class="button-container">
            <a href="Alan02.php" class="btn-brawl">Agregar Nuevo Brawler</a>
            <a href="index.html" class="btn-brawl">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>

<?php
$conexion->close();
?>