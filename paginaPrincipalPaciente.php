<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital de Tucumán</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <div class="hospital-icon"></div>
            <div class="hospital-name">Hospital de Tucumán</div>
        </div>
        <!-- Botón y menú desplegable para "Pacientes" -->
        <div class="dropdown">
            <button class="dropdown-button"> Pacientes</button>
            <div class="dropdown-content">
                <a href="form.html">Registro de Turno</a>
                <a href="administrador.php">Administracion</a>
                <a href="consulta.php">Registro de llamadas</a>
            </div>
        </div>

        <!-- Botón y menú desplegable para "Áreas" -->
        <div class="dropdown last-dropdown"> <!-- Aplica la clase last-dropdown aquí -->
            <button>Áreas</button>
            <div class="dropdown-content">
                <a href="area1.php">Cirugía</a>
                <a href="area2.php">Cardiología</a>
                <a href="area3.php">Pediatría</a>
                <a href="area4.php">Ginecología</a>
            </div>
        </div>
    </div>
    
    <div class="content">
        <section id="inicio" class="hospital-background">
            <div class="container">
                <h2>¡Bienvenido al Hospital de Tucumán!</h2>
                <p>Aqui podrás ver e imprimir tus datos Médicos.</p>
        
            </div>
        </section>
        </div>
        </nav>

        <a href="hacerpdfPaciente.php" class="boton">Crear PDF</a>

        </tr>

        <tbody>
            <?php
            $conexion = new mysqli("localhost", "root", "", "olimpiadas");
            $query ="SELECT * FROM Paciente";
            $resultado = $conexion->query($query);
            while($row = $resultado->fetch_assoc()){
            ?> 
            <ul class="tabla">
                <li> Nombre: <?php echo $row['nombre']; ?></li>
                <li> Apellido: <?php echo $row['apellido']; ?></li>
                <li> DNI: <?php echo $row['DNI']; ?></li>
                <li> Edad:<?php echo $row['edad']; ?></li>
                <li> Peso:<?php echo $row['peso']; ?></li>
                <li> Obra social:<?php echo $row['obra_social']; ?></li>
                <li> Medicacion:<?php echo $row['medicacion']; ?></li>
                <li> Sintomas:<?php echo $row['sintomas']; ?></li>
                <li> Genero:<?php echo $row['genero']; ?></li>
                <li> Area:<?php echo $row['area']; ?></li>
                <li> Enfermero:<?php echo $row['enfermero']; ?></li>
            </ul>

            <?php
                }
            ?>

    <div class="background-image"></div>
    <section id="contacto">
        <div class="container">
            <h2>Contacto</h2>
            <p>Estamos ubicados en:</p>
            <address>
                <p>Dirección: Calle Principal, Ciudad</p>
                <p>Teléfono: (123) 456-7890</p>
                <p>Email: info@hospitaldetucumán.com</p>
            </address>
        </div>
    </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Hospital de Tucumán. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>