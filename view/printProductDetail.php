<div id="product-detail">
    <img src="<?php echo htmlentities($result_product['image'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
    <div id="info-product">
        <h2><?php echo htmlentities($result_product['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h2>
        <div id="price-buy">
            <span class="price"><?php echo htmlentities($result_product['price'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>€</span>
            Cantidad: <input type="number" id="quantity" name="quantity" min="1" value="1">
            <button onclick="addToCart(
                this,
                '<?php echo $product; ?>',
                '<?php echo $result_product['name']; ?>',
                '<?php echo $result_product['image']; ?>',
                '<?php echo $result_product['price']; ?>',
                document.getElementById('quantity').value
            )">Añadir al carrito</button>
        </div> <br/>
        <p><?php echo htmlentities($result_product['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></p>
    </div>
</div>
