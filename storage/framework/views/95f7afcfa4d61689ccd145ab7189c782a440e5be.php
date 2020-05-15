<div class="menu-list">
    <?php if ($menuIsGrouped) { ?>
        <?= partial('@grouped', ['groupedMenuItems' => $menuList]); ?>
    <?php } else { ?>
        <?= partial('@items', ['menuItems' => $menuList]); ?>
    <?php } ?>

    <div class="pagination-bar text-right">
        <div class="links"><?= $menuList->links(); ?></div>
    </div>
</div>
<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/5d4/6f9/5d46f9401a83ed745f3feb7dbaabc864.php ENDPATH**/ ?>