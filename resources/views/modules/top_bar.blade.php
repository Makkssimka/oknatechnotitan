<div class="top-bar py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex">
                <i class="las la-clock me-1"></i>
                пн-пт — с 9-00 до 18-00 / сб — с 9-00 до 14-00 / вс — выходной
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                @foreach($emails as $email)
                <a href="mailto:{{ $email }}" class="d-flex align-items-center">
                    <i class="las la-envelope me-1"></i>
                    {{ $email }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
