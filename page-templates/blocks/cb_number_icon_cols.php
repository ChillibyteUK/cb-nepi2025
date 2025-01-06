<?php
$cols = get_field('columns') == '3' ? 'col-md-4' : 'col-md-3';
$bg = get_field('background') ? 'has-' . get_field('background') . '-background-color' : '';
$c = 1;
?>
<section class="cb_cols py-5 <?= $bg ?>">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
        ?>
            <h2 class="text-center mb-5"><?= get_field('title') ?></h2>
        <?php
        }
        ?>
        <div class="row g-4 justify-content-center">
            <?php
            while (have_rows('cards')) {
                the_row();
            ?>
                <div class="<?= $cols ?> four_cols__card">
                    <div class="h2 fw-900 mb-0"><?= $c ?></div>
                    <?php
                    if (get_sub_field('icon') ?? null) {
                        echo wp_get_attachment_image(get_sub_field('icon'), 'full', false, ['class' => 'four_cols__icon']);
                    }
                    ?>
                    <?= get_sub_field('content') ?>
                </div>
            <?php
                $c++;
            }
            ?>
        </div>
    </div>
</section>