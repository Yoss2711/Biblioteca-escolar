<?php
// Configuración inicial
$pageTitle = "Biblioteca Virtual - Colegio María Inmaculada";
$pageDescription = "Descubre un mundo infinito de conocimiento";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/auth/home/head.php'; ?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <?php include '../components/auth/home/floating-books.php'; ?>
    
    <?php include '../components/auth/home/header.php'; ?>
    
    <main>
    <?php include '../src/views/home/hero-section.php'; ?>
    <?php include '../src/views/home/catalog-preview.php'; ?>
    <?php include '../src/views/home/features-section.php'; ?>
    <?php include '../src/views/home/stats-section.php'; ?>
    <?php include '../src/views/home/about-us.php'; ?>
    <?php include '../src/views/home/contact-section.php'; ?>
    </main>

    <?php include '../components/auth/home/footer.php'; ?>

    <script src="assets/js/home/main.js"></script>
</body>
</html>