<!DOCTYPE html>
<html>
<head>
  <title>pagina pacientes</title>
  <link rel="stylesheet" type="text/css" href="./css/pa_paciente.css">
</head>
<!--  -->
<body style="background-image: url(./img/hospital.jpeg);background-repeat: no-repeat;background-size: cover;">
  <div class="background-image"></div>
    
  <div class="login-container">
    <h2>Pacientes del Hospital Tucuman</h2>

    <form action="guardarUsuarioPaciente.php" method="POST"  enctype="multipart/form-data" class="form" >
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Campo obligatorio" required ><br><br>
        
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Campo obligatorio" required><br><br>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>
  </div>
</body>
</html>