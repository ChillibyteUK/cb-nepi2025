<section class="contact">
    <div class="container-xl">
        <div class="w-md-75 w-xl-50 mx-auto py-5">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-map-marker-alt fs-500"></i></span> <strong>Address:</strong><br><?= get_field('contact_address', 'option') ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="fa-ul">
                        <li class="mb-2"><span class="fa-li"><i class="fas fa-phone fs-500"></i></span> <strong>Phone:</strong> <?= do_shortcode('[contact_phone]') ?></li>
                        <li><span class="fa-li"><i class="fas fa-envelope fs-500"></i></span> <strong>Email:</strong> <?= do_shortcode('[contact_email]') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>