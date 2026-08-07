<?php foreach ($results_categories as $category) { ?>
    <a onclick="loadProducts(<?php echo htmlentities($category['id_category'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>)">
        <?php echo htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>
    </a>
<?php } ?>
