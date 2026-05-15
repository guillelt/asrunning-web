<?php
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
require 'database.php';

$stmt = $conn->prepare('SELECT id, username, rutina FROM users WHERE id = :id');
$stmt->bindParam(':id', $_SESSION['user_id'], PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    session_destroy();
    header('Location: login.php');
    exit;
}

$tiene_rutina = !empty($user['rutina']) && filter_var($user['rutina'], FILTER_VALIDATE_URL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Planificación · AS Running</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/app.css?v=2">
</head>
<body>

<div class="dash-page">

  <header class="dash-header">
    <div class="container">
      <a href="index.html" class="logo">
        <img src="assets/logo_tri.png" alt="AS Running" class="logo-icon">
        <div class="logo-text">
          <span class="logo-name">AS Running</span>
        </div>
      </a>
      <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
    </div>
  </header>

  <main class="dash-main">
    <div class="container">
      <p class="dash-eyebrow">Área de atletas</p>
      <h1>Bienvenido/a, <?= htmlspecialchars($user['username']) ?></h1>
      <p class="dash-sub">Tu planificación semanal está disponible.</p>

      <div class="rutina-card">
        <h3>Rutina semanal</h3>
        <p>Tu entrenador cargó tu plan para esta semana. Hacé clic para abrirlo.</p>

        <?php if ($tiene_rutina): ?>
          <a href="<?= htmlspecialchars($user['rutina']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
            Ver mi rutina →
          </a>
        <?php else: ?>
          <p class="no-rutina">Tu rutina aún no está cargada. Contactá a tu entrenador.</p>
        <?php endif; ?>
      </div>
    </div>
  </main>

</div>
</body>
</html>
