<div id="cart-summary-container">
    <div id="cart-summary">
        <div id="cart-icon">
            <img src="/assets/imgs/shopping-cart.png" alt="Carrito" class="product-image-small">
        </div>
        <div id="cart-total-small">
            <p>Cantidad de productos: <span id="cart-total-products"><?php echo $cart_total_products; ?></span></p>
            <p>Total: <span id="cart-total"><?php echo $cart_total; ?>€</span></p>
        </div>
        <a href="index.php?action=resource-cart" id="view-cart-button">Ver carrito</a>
    </div>
</div>
