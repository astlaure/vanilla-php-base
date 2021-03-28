<?php
    require_once __DIR__ . '/../../app/app.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <base href="<?php echo $base_path; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/main.js"></script>
</head>
<body <?php if (isset($body)) { echo 'id="' . $body . '"'; } ?>>

<nav>
    <a href="/">Home</a>
</nav>