<header class="container header">
    <div class="row py-3">
        <div class="col-md-4 logo d-flex align-items-center">
            <img src="/images/logo.svg" alt="" class="me-2">
            <div class="text-center">
                <span class="d-block fs-1 logo__text g-font">ОКНА</span>
                <span class="g-font fw-bold">ТехноТитан</span>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <a class="header__icon-link fw-light d-flex align-items-center" href="#">
                <i class="las la-calculator me-2"></i>
                Рассчитать стоимость
            </a>
            <a class="header__icon-link fw-light d-flex align-items-center" href="#">
                <i class="las la-pencil-ruler me-2"></i>
                Вызвать замерщика
            </a>
        </div>
        <div class="col-md-4 d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column">
                @foreach($telephones as $telephone)
                <a class="fs-6" href="tel:{{ $telephone }}">{{ $telephone }}</a>
                @endforeach
            </div>
            <div>
                <a class="btn btn-primary" href="#modal">
                    <i class="las la-phone-volume"></i>
                    Перезвонить мне
                </a>
            </div>
        </div>
    </div>
</header>
