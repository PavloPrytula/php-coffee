<?php $about_us = $content['about_us'] ?>
<section id="about-us" class="section-gap pt-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 video-block d-flex align-items-center justify-content-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rABfboy0h6o"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
            <?php if ($about_us['text']): ?>
                <div class="col-sm-12 col-md-6 description-block d-flex flex-column align-items-start justify-content-center">
                    <h6><?= $about_us['text']['subtitle'] ?></h6>
                    <h1><?= $about_us['text']['title'] ?></h1>
                    <p class="quote"><b><?= $about_us['text']['quote'] ?></b></p>
                    <img src="<?= IMAGES_URI ?>/<?= $about_us['text']['image'] ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
