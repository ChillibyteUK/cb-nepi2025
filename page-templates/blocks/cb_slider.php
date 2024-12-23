<section class="slider py-5">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
        ?>
            <h2><?= get_field('title') ?></h2>
        <?php
        }
        ?>
        <div class="splide" id="slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    foreach (get_field('logos') as $logo) {
                    ?>
                        <li class="splide__slide">$logo</li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <!-- JavaScript to initialize Splide -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#slider', {
                type: 'loop', // Loop mode for infinite scrolling
                perPage: 5, // Default to 5 slides on desktop
                breakpoints: {
                    1024: {
                        perPage: 3
                    }, // Show 3 slides on tablet (max-width: 1024px)
                    768: {
                        perPage: 1
                    }, // Show 1 slide on mobile (max-width: 768px)
                },
                gap: '1rem', // Optional: Add space between slides
            }).mount();
        });
    </script>
<?php
}, 9999);
