<div id="gallery" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-light g-font mb-5 text-center">
                    Наши последние <span class="clr_danger">работы</span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="gallery" class="owl-carousel gallery">
                    @foreach($gallery_images as $image)
                        <a
                            data-fslightbox
                            href="/{{ $image }}"
                            style="background-image: url('/{{ $image }}');"
                            class="gallery__item">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
