<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/break-love" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/jomolhari-2" rel="stylesheet">
    <title>Fortnite Personajes</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #1a3c34;
            margin-bottom: 20px;
            font-family: 'Break Love', sans-serif;
            font-size: 2.2em;
        }
        .container-nav {
            max-width: 1200px;
            margin: 0 auto;
        }
        .navbar-brand, .nav-link {
            font-family: 'Jomolhari', sans-serif;
            font-weight: 600;
        }
        nav {
            background-color: #1a73e8;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background: white;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #e0e0e0;
            font-size: 14px;
        }
        th {
            background-color: #1a3c34;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 16px;
        }
        td {
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        tr:hover {
            background-color: #e8f0fe;
        }
        .dropdown-menu {
            background-color: #1a73e8;
            border: none;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        .dropdown-item {
            color: #fff;
            padding: 12px 20px;
            font-family: 'Jomolhari', sans-serif;
        }
        .dropdown-item:hover {
            background-color: #1557b0;
            color: #fff;
        }
        .jumbotron {
            background-color: #e8ecef;
            border-radius: 12px;
            padding: 30px;
            margin: 20px auto;
            max-width: 1000px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            table {
                font-size: 0.9em;
            }
            th, td {
                padding: 10px;
            }
            .jumbotron {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <nav style="background-color: #1a73e8; padding: 10px;">
        <div class="container-nav">
            <a class="navbar-brand" href="index.html" style="color: #fff; font-weight: bold;">INICIO</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                            UNIDAD 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="Alan01.php">Mostrar datos</a>
                            <a class="dropdown-item" href="Alan02.php">Practica 2</a>
                            <a class="dropdown-item" href="Alan03.php">Practica 3</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad2.html" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                            UNIDAD 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="Alan04.html">Practica 4</a>
                            <a class="dropdown-item" href="Alan05.php">Practica 5</a>
                            <a class="dropdown-item" href="Alan06.php">Practica 6</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="unidad3.html" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                            UNIDAD 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="Alan07.html">Practica 7</a>
                            <a class="dropdown-item" href="Alan08.html">Practica 8</a>
                            <a class="dropdown-item" href="Alan09.html">Practica 9</a>
                            <a class="dropdown-item" href="Alan10.html">Practica Final</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="display-4">MOSTRAR DATOS</h1>
        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "fortnite";
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("La conexion fallo:" . $conexion->connect_error);
        }
        $sql = "SELECT * FROM personajes";
        $resultado = $conexion->query($sql);
        ?>
        <div class="container">
            <h1>Personajes de Fortnite</h1>
            <?php
            if ($resultado->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Alias</th><th>Clase</th><th>Rol</th><th>Habilidad</th></tr>";
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["alias"] . "</td><td>" . $row["clase"] . "</td><td>" . $row["rol"] . "</td><td>" . $row["habilidad"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron registros en la base de datos";
            }
            $conexion->close();
            ?>
        </div>
    </div>
</body>

</html>