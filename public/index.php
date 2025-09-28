<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/auth.css">
    <title>Sistema Biblioteca</title>
</head>

<body>
    <?php include '../components/auth/login/decorations.php'; ?>

    <div class="container">
        <?php include '../components/auth/login/header.php'; ?>
        <?php include '../components/auth/login/tabs.php'; ?>
        <?php include '../components/auth/login/status-message.php'; ?>
        <?php include '../components/auth/login/forms.php'; ?>
        <?php include '../components/auth/login/user-info.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    <script type="module" src="assets/js/login/auth.js"></script>

</body>

</html> 