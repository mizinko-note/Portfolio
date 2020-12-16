<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    /**
     * Portfolio用、Profile用 Controller
     * @author mizinko
     */

class ProfileController extends Controller
{
    /**
     * Topページ、初期表示
     * @param none
     * @return view
     */
    public function index(){
        // 左メニュー選択 active
        $profile = true;
        return view('welcome',compact('profile'));
    }
}
