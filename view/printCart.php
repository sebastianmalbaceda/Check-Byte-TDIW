<div id="body-cart-container">
    <?php if ($isCartEmpty): ?>
        <h1>Tu carrito está vacío</h1>
        <p>Añade productos para verlos aquí.</p>
    <?php else: ?>
        <div class="top-cart">
            <h1>Productos en el carrito</h1>
            <button id="empty-cart-button" onclick="emptyCart()">Vaciar cesta</button>
        </div>
        <div id="cart-container">
            <?php foreach ($_SESSION['cart'] as $product_id => $product): ?>
                <div class="cart-item">
                    <div class="product-image">
                        <img src="<?php echo htmlentities($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlentities($product['name'], ENT_QUOTES, 'UTF-8'); ?>">
                    </div>
                    <div class="product-features">
                        <div class="product-details">
                            <h2 class="product-title"><?php echo htmlentities($product['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                            <p class="product-text">Precio unitario: <?php echo number_format($product['price'], 2); ?>€</p>
                            <div class="product-quantity">
                                <p class="product-text">Cantidad:</p>
                                <input type="number" name="quantity" min="1" value="<?php echo (int)$product['quantity']; ?>" onchange="updateProductQuantity('<?php echo $product_id; ?>', this.value)">
                            </div>
                            <p class="product-total">Total: <?php echo number_format($product['subtotal'], 2); ?>€</p>
                        </div>
                        <button class="delete-button" onclick="deleteProductCart('<?php echo $product_id; ?>')">Eliminar Producto</button>
                    </div>
                </div>
            <?php endforeach; ?>
            <hr>
            <div id="cart-summary">
                <h2>Resumen del carrito</h2>
                <p>Cantidad total:
                    <span id="cart-total"><?php echo (int)$_SESSION['cart_total_products']; ?></span>
                </p>
                <p>Precio total: 
                    <span id="cart-total"><?php echo number_format($_SESSION['cart_total'], 2); ?>€</span>
                </p>
                <a href="index.php?action=make-order" id="checkout-button">Finalizar compra</a>
            </div>
        </div>
    <?php endif; ?>
</div>