<div class="footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <a
                    class="mx-2 footer-menu__link"
                    href="{{ route('index') }}">
                    Пластиковые окна
                </a>
                <a
                    class="mx-2 footer-menu__link"
                    href="{{ route('balkony') }}">
                    Осткление балконов
                </a>
                <a
                    class="mx-2 footer-menu__link"
                    href="{{ route('lodzhii') }}">
                    Отделка лоджий
                </a>
                <a
                    class="mx-2 footer-menu__link"
                    href="{{ route('kotedzhi') }}">
                    Окна для коттеджей
                </a>
                <a
                    class="mx-2 footer-menu__link"
                    href="{{ route('kontakty') }}">
                    Контакты
                </a>
                <a
                    class="mx-2 footer-menu__link"
                    href="{{ route('akcii') }}">
                    Акции и скидки
                </a>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 d-flex flex-column align-items-end">
                    <a class="footer__contact" href="#">+7 (961) 456-67-67</a>
                    <a class="footer__contact" href="#">+7 (961) 456-68-68</a>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <a class="btn btn-icon btn-primary" href="#modal">
                        <i class="las la-phone-volume"></i>
                        Перезвонить мне
                    </a>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-start justify-content-center">
                    <a class="footer__mail" href="#">mail@yandex.ru</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center footer__copyright">
                    2012-{{ date('Y') }} © ОкнаТехноТитан. Все права защищены.
                </div>
            </div>
        </div>
    </div>
</div>
