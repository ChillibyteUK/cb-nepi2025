<?php
$cols = get_field('columns') == '3' ? 'col-md-4' : 'col-md-3';
$bg = get_field('background') ? 'has-' . get_field('background') . '-background-color' : '';
?>
<section class="cb_cols py-5 <?= $bg ?>">
    <div class="container-xl">
        <div class="row g-4 justify-content-center">
            <?php
            while (have_rows('cards')) {
                the_row();
            ?>
                <div class="<?= $cols ?> four_cols__card"><?= get_sub_field('content') ?></div>
            <?php
            }
            ?>
        </div>
    </div>
</section>