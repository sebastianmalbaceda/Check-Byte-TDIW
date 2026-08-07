<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check Byte - Catálogo</title>
        <link rel="icon" href="/assets/imgs/Logo_Check-byte_name_no_background.png">
        <link rel="stylesheet" href="/assets/css/global.css">
        <link rel="stylesheet" href="/assets/css/catalog.css">
	    <link rel="stylesheet" href="/assets/css/products.css">
        <link rel="stylesheet" href="/assets/css/productDetail.css">
        <link rel="stylesheet" href="/assets/css/miniCart.css">
        <script src="/assets/js/loadAddToCart.js"></script>
        <script src="/assets/js/loadProducts.js"></script>
        <script src="/assets/js/loadProductDetail.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/userAction.js"></script>
    </head>

    <body>
        <?php require __DIR__ . "/controller/controllerHeader.php" ?>

        <main>
            <div id="body-catalog-container">
                <div id="categories-container">
                    <?php require __DIR__ . "/controller/controllerCategories.php"; ?>
                </div>

                <div id="products">
                    <?php require __DIR__ . "/controller/controllerProducts.php"; ?>
                </div>
            </div>
            <?php require __DIR__ . "/controller/controllerMiniCart.php" ?>
        </main>

        <?php require __DIR__ . "/controller/controllerFooter.php" ?>
    </body>
    <script src="/assets/js/deployMinicart.js"></script>
</html>