<?php
// Definir la URL base para los assets ANTES de cualquier otra cosa.
define('BASE_URL', '/Biblioteca-escolar/public/');

// Configuración inicial
$pageTitle = "Biblioteca Virtual - Colegio María Inmaculada";
$pageDescription = "Descubre un mundo infinito de conocimiento";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/auth/home/head.php'; ?>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>asset.php?file=assets/css/home.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <?php include '../components/auth/home/header.php'; ?>
    
    <main>
    <?php include '../components/auth/home/hero-section.php'; ?>
    <?php include '../components/auth/home/catalog-preview.php'; ?>
    <?php include '../components/auth/home/services-section.php'; ?>
    <?php include '../components/auth/home/about-us.php'; ?>
    <?php include '../components/auth/home/contact-section.php'; ?>
    </main>

    <?php include '../components/auth/home/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>asset.php?file=assets/js/home/main.js"></script>
</body>
</html>