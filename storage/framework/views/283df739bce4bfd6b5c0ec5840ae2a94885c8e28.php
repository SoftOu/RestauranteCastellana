<?= $customer
    ? sprintf(lang('igniter.user::default.text_logged_out'), $customer->first_name, 'session::onLogout')
    : sprintf(lang('igniter.user::default.text_logged_in'), $session->loginUrl());
?>

<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/327/6c7/3276c79f05f220dacd9e212cda65b9e1.php ENDPATH**/ ?>