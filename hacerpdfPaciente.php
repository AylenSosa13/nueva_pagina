<!DOCTYPE html>
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <link rel="stylesheet" href="pdf.css">
</head>
<body>
  <div>
      <a href="paginaPrincipalPaciente.php" class="button">Volver</a>
  </div>
  <div class="texto">
    <h1>Registro de pacientes</h1>
  </div>
  <center>
      <tbody>
        <?php
          $conexion = new mysqli("localhost", "root", "", "olimpiadas");
          $query ="SELECT * FROM Paciente";
          $resultado = $conexion->query($query);
          while($row = $resultado->fetch_assoc()){
        ?>
            <ul style="list-style-type: none;">
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

      </tbody>
    </table>
    <div class="button-container">
      <button id="btnCrearPdf" class="button">Crear PDF de la Tabla</button>
    </div>
  </center>
  
  
  <script>
  document.addEventListener("DOMContentLoaded", () => {
  const $boton = document.querySelector("#btnCrearPdf");
  $boton.addEventListener("click", () => {
    const $tablaParaConvertir = document.querySelector("table");

    // Duplicar la tabla para mantenerla en el documento original
    const $tablaCopia = $tablaParaConvertir.cloneNode(true);

    // Crear un contenedor div para centrar la tabla
    const $contenedor = document.createElement("div");
    $contenedor.style.display = "flex";
    $contenedor.style.justifyContent = "center";
    $contenedor.style.alignItems = "center";
    $contenedor.style.height = "100%"; // Opcional: Ajusta la altura del contenedor

    // Agregar la tabla duplicada al contenedor
    $contenedor.appendChild($tablaCopia);

    html2pdf()
      .set({
        margin: 10,
        filename: 'tabla.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: 'landscape' }
      })
      .from($contenedor) // Ahora convierte el contenedor, que contiene la tabla centrada
      .save()
      .catch(err => console.log(err));
    });
  });

 
  </script>
  <div class="background-image"></div>
</body>
</html>
