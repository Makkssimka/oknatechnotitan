<div id="reviews" class="reviews bg_grey py-5 my-5">
    <div class="container">
        <div class="col-12">
            <h2 class="fw-light g-font mb-5 text-center">
                Отзывы <span class="clr_danger">наших клиентов</span>
            </h2>
        </div>
        <div class="row">
            <div class="reviews__list owl-carousel">
                @foreach ($reviews_images as $review)
                    <a
                        data-fslightbox="reviews"
                        href="/{{ $review }}"
                        style="background-image: url('/{{ $review }}');"
                        class="reviews__item">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
