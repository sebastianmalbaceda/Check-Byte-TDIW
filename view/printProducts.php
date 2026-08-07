<div id="products-list">
    <?php foreach ($result_products as $product) { ?>
        <div class="product">
            <img src="<?php echo htmlentities($product['image'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" onclick="loadProductDetail(<?php echo htmlentities($product['id_product'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">
            <p><?php echo htmlentities($product['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></p>
            <span class="price"><?php echo htmlentities($product['price'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>€</span>
            <button class="add-to-cart" onclick="addToCart(
                this,
                '<?php echo $product['id_product']; ?>',
                '<?php echo $product['name']; ?>',
                '<?php echo $product['image']; ?>',
                '<?php echo $product['price']; ?>',
                1
            )">Añadir al carrito</button>
        </div>
    <?php } ?>
</div>
