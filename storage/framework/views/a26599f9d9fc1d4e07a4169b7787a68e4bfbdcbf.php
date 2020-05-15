<?php if ($cart->count()) { ?>
    <div class="cart-total">
        <div class="table-responsive">
            <table class="table table-none">
                <tbody>

                <tr>
                    <td>
                    <span class="text-muted">
                        <?= lang('igniter.cart::default.text_sub_total'); ?>:
                   </span>
                    </td>
                    <td class="text-right">
                        <?= currency_format($cart->subtotal()); ?>
                    </td>
                </tr>

                <?php foreach ($cart->conditions() as $id => $condition) { ?>
                    <tr>
                        <td>
                        <span class="text-muted">
                            <?= e($condition->getLabel()); ?>:
                            <?php if ($condition->removeable) { ?>
                                <button
                                    type="button"
                                    class="btn btn-sm"
                                    data-request="<?= $removeConditionEventHandler; ?>"
                                    data-request-data="conditionId: '<?= $id; ?>'"
                                    data-replace-loading="fa fa-spinner fa-spin"
                                ><i class="fa fa-times"></i></button>
                            <?php } ?>
                       </span>
                        </td>
                        <td class="text-right">
                            <?= is_numeric($result = $condition->getValue())
                                ? currency_format($result)
                                : $result; ?>
                        </td>
                    </tr>
                <?php } ?>

                <tr>
                    <td>
                    <span class="text-muted">
                        <?= lang('igniter.cart::default.text_order_total'); ?>:
                   </span>
                    </td>
                    <td class="text-right">
                        <?= currency_format($cart->total()); ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>
<?php /**PATH /home/dario/Dev/restaurant/storage/system/templates/6b5/31a/6b531a59a6ec3298752ea04d9fa9af4f.php ENDPATH**/ ?>