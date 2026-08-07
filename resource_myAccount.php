<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/assets/imgs/Logo_Check-byte_name_no_background.png">
        <link rel="stylesheet" href="/assets/css/global.css">
        <link rel="stylesheet" href="/assets/css/myAccount.css">
        <link rel="stylesheet" href="/assets/css/miniCart.css">
        <title>Check Byte - Mi Cuenta</title>
    </head>
    <body>
        <?php require __DIR__ . "/controller/controllerHeader.php" ?>

        <main>
            <?php require __DIR__ . "/controller/controllerUserInfo.php" ?>
            <?php require __DIR__ . "/controller/controllerMiniCart.php" ?>
        </main>

        <?php require __DIR__ . "/controller/controllerFooter.php" ?>
    </body>
    <script src="/assets/js/deployMinicart.js"></script>
</html>