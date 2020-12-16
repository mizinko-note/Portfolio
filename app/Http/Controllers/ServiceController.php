<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    /**
     * Portfolio用、Service用 Controller
     * @author mizinko
     */

class ServiceController extends Controller
{
    /**
     * Topページ、初期表示
     * @param none
     * @return view
     */
    public function index(){
        // 左メニュー選択 active
        $service = true;
        return view('welcome',compact('service'));
    }
}
