<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Living waters Medtransport LLC</title>
    <link rel="icon" href="assets/imgs/img-logo.png">
    <?php require_once 'includes/links.php'; ?>
</head>
<body>
    <?php if ($content === '404') : ?>
        <?php require_once 'content/' . $content . '.php'; ?>
    <?php else : ?>
        <?php require_once 'includes/header.php'; ?>

        <?php require_once 'content/' . $content; ?>

        <?php require_once 'includes/footer.php'; ?>
        <?php require_once 'includes/scripts.php' ?>
    <?php endif; ?>
</body>
</html>