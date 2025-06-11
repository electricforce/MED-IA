


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Usuario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #ebf4ff, #f5f3ff);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .card {
      background: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 12px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .card h2 {
      color: #4f46e5;
      margin-bottom: 0.5rem;
    }
    .card p {
      color: #6b7280;
      margin-bottom: 1rem;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 0.3rem;
    }
    .form-group input {
      width: 100%;
      padding: 0.6rem;
      border: 1px solid #d1d5db;
      border-radius: 6px;
    }
    .btn-group {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }
    .btn {
      flex: 1;
      padding: 0.75rem;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .btn-primary {
      background: linear-gradient(to right, #3b82f6, #8b5cf6);
      color: white;
    }
    .btn-secondary {
      background: #f3f4f6;
      color: #374151;
      border: 1px solid #d1d5db;
    }
  </style>
</head>
<body>

  <form class="card" action="procesar.php" method="POST">
    <h2>Datos Personales del Usuario</h2>
    <p>Complete la información de su perfil personal</p>

    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
    </div>

    <div class="form-group">
      <label for="apellidos">Apellidos</label>
      <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" required>
    </div>

    <div class="form-group">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
    </div>

    <div class="form-group">
      <label for="email">Email del usuario</label>
      <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required>
    </div>

    <div class="form-group">
      <label for="contraseña">Contraseña</label>
      <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required>
    </div>

    <div class="form-group">
      <label for="repetir_contraseña">Repetir Contraseña</label>
      <input type="password" id="repetir_contraseña" name="repetir_contraseña" placeholder="Confirme su contraseña" required>
    </div>

    <div class="btn-group">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
  </form>

</body>
</html>
