<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    private $data = [];

    public function __construct() {
        $this->data['telephones'] = [
            '+7 (961) 456-67-67',
            '+7 (961) 456-68-68'
        ];

        $this->data['emails'] = [
            'okna@technotitan.ru'
        ];
    }

    public function index() {

        $this->data['title'] = 'Пластиковые окна';

        $this->data['gallery_images'] = Storage::files('/images/gallery/okna');
        $this->data['reviews_images'] = Storage::files('/images/reviews');

        return view('pages.index', $this->data);
    }

    public function balkony() {
        $data = [];

        $data['title'] = 'Остекление балконов';

        return view('pages.index', $data);
    }

    public function lodzhii() {
        $data = [];

        $data['title'] = 'Отделка лоджий';

        return view('pages.index', $data);
    }

    public function kotedzhi() {
        $data = [];

        $data['title'] = 'Окна для коттеджей';

        return view('pages.index', $data);
    }

    public function kontakty() {
        $data = [];

        $data['title'] = 'Контакты';

        return view('pages.index', $data);
    }

    public function akcii() {
        $data = [];

        $data['title'] = 'Акции и скидки';

        return view('pages.index', $data);
    }
}
