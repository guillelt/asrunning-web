<?php
session_start();
require 'database.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Completá tu DNI y contraseña.';
    } else {
        $stmt = $conn->prepare('SELECT id, username, password FROM users WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'DNI o contraseña incorrectos.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso Atletas · AS Running</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/app.css?v=2">
</head>
<body>

<div class="auth-page">

  <header class="auth-header">
    <div class="container">
      <a href="index.html" class="logo">
        <img src="assets/logo_tri.png" alt="AS Running" class="logo-icon">
        <div class="logo-text">
          <span class="logo-name">AS Running</span>
        </div>
      </a>
      <a href="index.php" class="auth-back">← Volver al inicio</a>
    </div>
  </header>

  <main class="auth-main">
    <div class="auth-card">
      <h1>Acceso Atletas</h1>
      <p class="auth-subtitle">Ingresá con tu DNI y contraseña para ver tu rutina semanal.</p>

      <?php if ($error): ?>
        <div class="alert-error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="POST" action="login.php" novalidate>
        <div class="form-group">
          <label for="username">DNI</label>
          <input
            type="text" id="username" name="username"
            placeholder="Ej: 30123456"
            value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"
            autocomplete="username" autofocus required>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input
            type="password" id="password" name="password"
            placeholder="Tu contraseña"
            autocomplete="current-password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
      </form>
    </div>
  </main>

</div>
</body>
</html>
