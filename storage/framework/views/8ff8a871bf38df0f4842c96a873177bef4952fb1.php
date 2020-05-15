<nav class="navbar navbar-light navbar-top navbar-expand-md fixed-top">
    <div class="container">
        <?= partial('nav/logo'); ?>
        <button
            class="navbar-toggler border-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarMainHeader"
            aria-controls="navbarMainHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
        ><span class="navbar-toggler-icon"></span></button>

        <div class="justify-content-end collapse navbar-collapse" id="navbarMainHeader">
            <?= partial('nav/main_menu', ['items' => $mainMenu->menuItems()]); ?>
        </div>
    </div>
</nav><?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/c76/92a/c7692af9437fa3d64b66c6361a705cd8.php ENDPATH**/ ?>