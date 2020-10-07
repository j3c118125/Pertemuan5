<?php
namespace App\Controllers;
// artinya ada class base controller di folder app trs masuk folder controller

class Beranda extends BaseController {
    
    public function index() {
        return view ('beranda_v');
    }
}