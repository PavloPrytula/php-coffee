<?php $gallery = $content['gallery']; ?>
<section id="gallery" class="section-gap">
    <div class="container">
        <div class="row title-row">
            <div class="col-12">
                <h1><?= $gallery['title'] ?? '' ?></h1>
                <p><?= $gallery['description'] ?? '' ?></p>
            </div>
        </div>
        <div class="row row-cols-2">
            <?php if ($gallery['images']): ?>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid w-100 mb-3" src="<?= IMAGES_URI ?>/<?= $gallery['images']['0'] ?>"
                                 alt="">
                        </div>
                        <div class="col-12">
                            <img class="img-fluid w-100 mb-3" src="<?= IMAGES_URI ?>/<?= $gallery['images']['1'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-8">
                    <div class="col-12">
                        <img class="img-fluid w-100 mb-3" src="<?= IMAGES_URI ?>/<?= $gallery['images']['2'] ?>">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img class="img-fluid w-100 mb-3" src="<?= IMAGES_URI ?>/<?= $gallery['images']['3'] ?>"
                                     alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <img class="img-fluid w-100 mb-3" src="<?= IMAGES_URI ?>/<?= $gallery['images']['4'] ?>"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
