<div class="menu-items">
    <?php if (count($menuItems)) { ?>
        <?php foreach ($menuItems as $menuItem) { ?>
            <?= partial('@item', ['menuItem' => $menuItem]); ?>
        <?php } ?>
    <?php }
    else { ?>
        <p><?= lang('igniter.local::default.text_empty'); ?></p>
    <?php } ?>
</div>
<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/1a0/c6c/1a0c6c8a7e9c838c8db88692fdb74008.php ENDPATH**/ ?>