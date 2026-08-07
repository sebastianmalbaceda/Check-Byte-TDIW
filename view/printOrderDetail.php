<div id="order-container">
    <?php if ($confirmed === 'true'): ?>
        <h1>¡Gracias por tu compra!</h1>
        <p>Tu pedido ha sido confirmado exitosamente.</p>
    <?php else: ?>
        <h1>Detalles del Pedido</h1>
    <?php endif; ?>

    <div class="order-summary">
        <h2>Resumen del Pedido</h2>
        <p><strong>Número de Pedido:</strong> #<?php echo htmlentities($orderDetails['id_order'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Fecha de Compra:</strong> <?php echo htmlentities($orderDetails['order_datetime'], ENT_QUOTES, 'UTF-8'); ?></p>
	<p><strong>Estado:</strong> En proceso</p>
    </div>

    <div class="order-products">
        <h2>Productos Comprados</h2>
        <?php foreach ($orderDetails['products'] as $product): ?>
            <div class="product-item">
                <img src="<?php echo htmlentities($product['product_image'], ENT_QUOTES, 'UTF-8'); ?>" class="product-image">
                <div class="product-details">
                    <h3><?php echo htmlentities($product['product_name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p>Precio unitario: <?php echo number_format($product['product_price'], 2); ?>€</p>
                    <p>Cantidad: <?php echo htmlentities($product['product_quantity'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <p>Subtotal: <?php echo number_format($product['product_subtotal'], 2); ?>€</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="total-summary">
        <p><strong>Total del Pedido:</strong> <?php echo number_format($orderDetails['total_price'], 2); ?>€</p>
        <p><strong>Total de Productos:</strong> <?php echo htmlentities($orderDetails['total_products'], ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
    
    <div class="confirmation-actions">
        <?php if ($confirmed === 'true'): ?>
            <a href="index.php?action=resource-myOrders" class="button">Ver Mis Compras</a>
            <a href="index.php" class="button">Volver a Inicio</a>
        <?php else: ?>
            <a href="index.php?action=resource-myOrders" class="button">Volver a Mis Compras</a>
        <?php endif; ?>
    </div>
</div>