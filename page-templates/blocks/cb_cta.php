<section class="cta py-5">
    <div class="container-xl rounded-2 p-4 has-blue-100-background-color text-center">
        <?php
        if (get_field('title') ?? null) {
        ?>
            <h2><?= get_field('title') ?></h2>
        <?php
        }
        if (get_field('content') ?? null) {
        ?>
            <div class="mb-4 has-medium-font-size"><?= get_field('content') ?></div>
        <?php
        }
        ?>
        <a href="/contact/" class="button button-primary">Book Now</a>
    </div>
</section>