<?php foreach ($results_categories as $category) { ?>
    <a href="index.php?action=resource-catalog&category=<?php echo htmlentities($category['id_category'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>"> 
        <div class="category">
            <img src="<?php echo htmlentities($category['image'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
            <h3><?php echo htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h3>
        </div>
    </a>
<?php } ?>
