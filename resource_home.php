<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check Byte - Inicio</title>
        <link rel="icon" href="/assets/imgs/Logo_Check-byte_name_no_background.png">
        <link rel="stylesheet" href="/assets/css/global.css">
        <link rel="stylesheet" href="/assets/css/categoriesHome.css">
        <link rel="stylesheet" href="/assets/css/miniCart.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/userAction.js"></script>

    </head>
    <body>
        <?php require __DIR__ . "/controller/controllerHeader.php" ?>

        <main>
            <div id="body-categories-container">
                <h1>Bienvenidos a Check Byte</h1>
                <div id="categories-container">
                    <?php require __DIR__ . "/controller/controllerCategoriesHome.php" ?>     
                </div>
            </div>
            <?php require __DIR__ . "/controller/controllerMiniCart.php" ?>
        </main>

        <?php require __DIR__ . "/controller/controllerFooter.php" ?>
    </body>
    <script src="/assets/js/deployMinicart.js"></script>
</html>