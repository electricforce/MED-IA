<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Elegante</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body, html {
      height: 100%;
      overflow: hidden;
    }

    body {
      background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(10px);
      z-index: 1;
      width: 350px;
      position: relative;
    }

    .login-container h2 {
      margin-bottom: 20px;
      text-align: center;
      font-size: 28px;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      background: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 16px;
    }

    .login-container input:focus {
      outline: none;
      box-shadow: 0 0 8px #00f2fe;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      border: none;
      border-radius: 10px;
      font-size: 18px;
      color: white;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .login-container button:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #43cea2, #185a9d);
    }

    /* Fondo animado */
    .animated-bg {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 20px;
      height: 20px;
      background: rgba(255, 255, 255, 0.15);
      animation: animate 25s linear infinite;
      bottom: -150px;
      border-radius: 50%;
    }

    .circles li:nth-child(1) {
      left: 25%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }

    .circles li:nth-child(2) {
      left: 10%;
      width: 20px;
      height: 20px;
      animation-delay: 2s;
      animation-duration: 12s;
    }

    .circles li:nth-child(3) {
      left: 70%;
      width: 20px;
      height: 20px;
      animation-delay: 4s;
    }

    .circles li:nth-child(4) {
      left: 40%;
      width: 60px;
      height: 60px;
      animation-delay: 0s;
      animation-duration: 18s;
    }

    .circles li:nth-child(5) {
      left: 65%;
      width: 20px;
      height: 20px;
      animation-delay: 0s;
    }

    .circles li:nth-child(6) {
      left: 75%;
      width: 110px;
      height: 110px;
      animation-delay: 3s;
    }

    .circles li:nth-child(7) {
      left: 35%;
      width: 150px;
      height: 150px;
      animation-delay: 7s;
    }

    .circles li:nth-child(8) {
      left: 50%;
      width: 25px;
      height: 25px;
      animation-delay: 15s;
      animation-duration: 45s;
    }

    @keyframes animate {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
      }

      100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <?php include("conexion.php") ?>
    <form method="post">
      <h2>Iniciar Sesión</h2>
      <input name="usuario" type="text" placeholder="Usuario" />
      <input name="password" type="password" placeholder="Contraseña" />

      
      <?php include("controladores\ctr_login.php") ?>
      
      <input name="btningresar" type="submit"  value="Iniciar Sesion" />
    </form>
    
  </div>

  <!-- Fondo animado -->
  <div class="animated-bg">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</body>
</html>
