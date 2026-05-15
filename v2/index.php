<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>Bien, ahí pude, pero tengo dos index, uno HTML y otro PHP, porque tengo dos index en la versión 2.
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AS Running · Entrenamiento de Triatlón</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/app.css?v=2">
</head>
<body>

<!-- HEADER -->
<header class="site-header">
  <div class="container">
    <a href="index.php" class="logo">
      <img src="assets/logo_tri.png" alt="AS Running" class="logo-icon">
      <div class="logo-text">
        <span class="logo-name">AS Running</span>
      </div>
    </a>
    <nav class="main-nav">
      <a href="#disciplinas">Disciplinas</a>
      <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="social-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
        Coach @aINSTAGRAM
      </a>
      <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="social-link">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
        @nINSTAGRAM
      </a>
      <a href="login.php" class="btn btn-primary">Acceso Atletas</a>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">
    <p class="hero-tag">Entrenamiento personalizado</p>
    <h1>Disciplina.<br><span>Todos los días.</span></h1>
    <p class="hero-sub">
      Planificación individualizada en natación, ciclismo y pedestrismo
      para atletas que buscan resultados reales.
    </p>
    <div class="hero-actions">
      <a href="login.php" class="btn btn-primary btn-lg">Acceso Atletas</a>
      <a href="#disciplinas" class="btn btn-outline btn-lg">Ver disciplinas</a>
    </div>
  </div>
</section>

<!-- DISCIPLINAS -->
<section class="sports" id="disciplinas">
  <div class="container">
    <p class="section-label">Disciplinas</p>
    <h2 class="section-title">Tu deporte,<br>tu plan.</h2>

    <div class="sports-grid">

      <!-- Natación -->
      <div class="sport-card">
        <div class="sport-icon">
          <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="32" cy="9" r="4"/>
            <path d="M10 26 L22 18 L32 22"/>
            <path d="M22 18 L18 28 Q16 32 10 34"/>
            <path d="M4 38 Q10 31 17 38 Q24 45 31 38 Q38 31 44 38"/>
          </svg>
        </div>
        <h3>Natación</h3>
        <p class="sport-desc">Técnica, eficiencia y resistencia en el agua. Cada brazada tiene un propósito.</p>
      </div>

      <!-- Ciclismo -->
      <div class="sport-card sport-card--dark">
        <div class="sport-icon">
          <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="33" r="9"/>
            <circle cx="37" cy="33" r="9"/>
            <path d="M37 33 L30 16 L22 20 L11 33"/>
            <path d="M30 16 L24 16"/>
            <path d="M22 20 L24 33"/>
            <circle cx="11" cy="33" r="2" fill="currentColor"/>
            <circle cx="37" cy="33" r="2" fill="currentColor"/>
          </svg>
        </div>
        <h3>Ciclismo</h3>
        <p class="sport-desc">Potencia, cadencia y estrategia de ruta. Llegá al T2 con las piernas listas para correr.</p>
      </div>

      <!-- Pedestrismo -->
      <div class="sport-card">
        <div class="sport-icon">
          <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="30" cy="8" r="4"/>
            <path d="M24 14 L16 22 L8 26"/>
            <path d="M18 19 L21 30 L13 40"/>
            <path d="M20 27 L30 30 L36 24"/>
            <path d="M30 30 L33 40"/>
          </svg>
        </div>
        <h3>Pedestrismo</h3>
        <p class="sport-desc">Economía de carrera y manejo del ritmo. El último tramo es donde todo se decide.</p>
      </div>

    </div>
  </div>
</section>

<!-- ACCESO ATLETAS -->
<section class="access" id="acceso">
  <div class="container">
    <h2>¿Ya sos atleta?</h2>
    <p>Accedé a tu planificación semanal personalizada</p>
    <a href="login.php" class="btn btn-white btn-lg">Ingresar con mi DNI</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    © 2026 AS Running · Todos los derechos reservados
  </div>
</footer>

</body>
</html>
