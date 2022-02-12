<div class="top-menu py-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fw-light d-flex justify-content-center g-font">
                <a
                    class="mx-2 top-menu__link {{ request()->routeIs('index') ? 'top-menu__link_active' : null }}"
                    href="{{ route('index') }}">
                        Пластиковые окна
                </a>
                <a
                    class="mx-2 top-menu__link {{ request()->routeIs('balkony') ? 'top-menu__link_active' : null }}"
                    href="{{ route('balkony') }}">
                        Осткление балконов
                </a>
                <a
                    class="mx-2 top-menu__link {{ request()->routeIs('lodzhii') ? 'top-menu__link_active' : null }}"
                    href="{{ route('lodzhii') }}">
                        Отделка лоджий
                </a>
                <a
                    class="mx-2 top-menu__link {{ request()->routeIs('kotedzhi') ? 'top-menu__link_active' : null }}"
                    href="{{ route('kotedzhi') }}">
                        Окна для коттеджей
                </a>
                <a
                    class="mx-2 top-menu__link {{ request()->routeIs('kontakty') ? 'top-menu__link_active' : null }}"
                    href="{{ route('kontakty') }}">
                        Контакты
                </a>
                <a
                    class="mx-2 top-menu__link {{ request()->routeIs('akcii') ? 'top-menu__link_active' : null }}"
                    href="{{ route('akcii') }}">
                        Акции и скидки
                </a>
            </div>
        </div>
    </div>
</div>
