<form
    id="location-search"
    method="POST"
    role="form"
    data-request="<?= $searchEventHandler; ?>"
>
    <div class="input-group">
        <div class="input-group-prepend">
            <span
                class="input-group-text"
            ><i class="fa fa-map-marker"></i></span>
        </div>
        <input
            type="text"
            id="search-query"
            class="form-control text-center"
            name="search_query"
            placeholder="<?= lang('igniter.local::default.label_search_query'); ?>"
            value="<?= $location->userPosition()->isValid() ? trim($location->userPosition()->format()) : ''; ?>"
        >
        <div class="input-group-append">
            <button
                type="button"
                class="btn btn-light"
                data-control="search-local"
                data-replace-loading="fa fa-spinner fa-spin"
            ><i class="fa fa-check"></i></button>
        </div>
    </div>
</form>
<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/6d9/4e7/6d94e79ad64d8c9e626cc9b1d53a4f07.php ENDPATH**/ ?>