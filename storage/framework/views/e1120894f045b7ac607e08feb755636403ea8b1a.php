<ul class="social-icons list-inline">
    <?php $socialIcons = $this->theme->social ?? []; ?>

    <?php foreach ($socialIcons as $icon) { ?>
        <li>
            <a
                class="p-2 <?= array_get($icon, 'class') ?>"
                target="_blank"
                title="<?= array_get($icon, 'title') ?>"
                href="<?= array_get($icon, 'url') ?>">
            </a>
        </li>
    <?php } ?>
</ul>
<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/f19/e2d/f19e2d7be4eff4542983f99f5f6bb246.php ENDPATH**/ ?>