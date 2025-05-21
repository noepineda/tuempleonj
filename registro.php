<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Cuenta</title>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
  <h2>Registro de Cuenta</h2>

  <!-- Registro Manual -->
  <form action="procesar_registro.php" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="contrasena" required><br><br>

    <label>Tipo de Usuario:</label><br>
    <select name="tipo" required>
      <option value="candidato">Candidato</option>
      <option value="empresa">Empresa</option>
    </select><br><br>

    <button type="submit">Registrarse</button>
  </form>

  <hr>

  <!-- Registro con Gmail -->
  <div id="g_id_onload"
       data-client_id="TU_CLIENT_ID_DE_GOOGLE"
       data-context="signup"
       data-ux_mode="popup"
       data-login_uri="registro_google.php"
       data-auto_prompt="false">
  </div>

  <div class="g_id_signin"
       data-type="standard"
       data-shape="rectangular"
       data-theme="outline"
       data-text="signup_with"
       data-size="large">
  </div>
</body>
</html>
