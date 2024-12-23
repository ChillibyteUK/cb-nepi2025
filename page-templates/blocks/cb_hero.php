<section class="hero">
    <?= wp_get_attachment_image(get_field('background'), 'full', false) ?>
    <div class="overlay"></div>
    <div class="container-xl">
        <?php
        if (get_field('pre_title') ?? null) {
        ?>
            <div class="pre_title mb-3"><?= get_field('pre_title') ?></div>
        <?php
        }
        ?>
        <h1 class="mb-4"><?= get_field('title') ?></h1>
        <?php
        $l = get_field('cta') ?? null;
        if ($l) {
        ?>
            <a href="<?= $l['url'] ?>" target="<?= $l['target'] ?>" class="button button-primary"><?= $l['title'] ?></a>
        <?php
        }
        ?>
    </div>
</section>