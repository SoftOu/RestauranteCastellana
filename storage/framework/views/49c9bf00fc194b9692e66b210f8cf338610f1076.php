<?php foreach ($categories as $category) { ?>
    <?php
    if (in_array($category->getKey(), $hiddenCategories)) continue;
    if ($hideEmptyCategory AND $category->count_menus < 1) continue;
    $isActive = ($selectedCategory AND $category->permalink_slug == $selectedCategory->permalink_slug);
    $children = $category->children;
    ?>
    <a
        class="nav-link<?= $isActive ? ' active' : ''; ?>"
        href="<?= page_url('local/menus', ['category' => $category->permalink_slug]) ?>"
    ><?= $category->name ?></a>

    <?php if (count($children)) { ?>
        <nav class="nav nav-categories flex-column ml-3 my-1">
            <?= partial('@items', ['categories' => $children]); ?>
        </nav>
    <?php } ?>
<?php } ?>
<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/89f/7c4/89f7c41bbe25336c4a52d2ff7000ad1e.php ENDPATH**/ ?>