<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    /**
     * Portfolio用、TOPページController
     * @author mizinko
     */

class WelcomeTopController extends Controller
{
    /**
     * Topページ、初期表示
     * @param none
     * @return view
     */
    public function index(){
        // 左メニュー選択 active
        $home = true;
        return view('welcome',compact('home'));
    }
}
