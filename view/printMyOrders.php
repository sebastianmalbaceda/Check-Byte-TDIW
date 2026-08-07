<div id="body-orders-container">
    <h1>Mis Pedidos</h1>
    <div id="orders-container">
        <?php if (empty($orders)): ?>
            <p>No has realizado ningún pedido todavía.</p>
        <?php else: ?>
            <?php foreach ($orders as $order): ?>
                <div class="order-item">
                    <span class="order-id"><strong>Pedido #:</strong> <?php echo htmlentities($order['id_order'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="order-date"><strong>Fecha de Compra:</strong> <?php echo htmlentities($order['order_datetime'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span lass="order-status status-in-progress"><strong>Estado:</strong> <span class="status-in-progress">En Proceso</span></span>
                    <span class="order-total"><strong>Total del Pedido:</strong> <?php echo number_format($order['total_price'], 2); ?>€</span>
                    <a href="index.php?action=resource-order-detail&order_id=<?php echo htmlentities($order['id_order'], ENT_QUOTES, 'UTF-8'); ?>" class="order-details-button">Ver Detalles</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

