<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    /**
     * Portfolio用、Blog用 Controller
     * @author mizinko
     */

class BlogController extends Controller
{
    /**
     * Topページ、初期表示
     * @param none
     * @return view
     */
    public function index(){
        // 左メニュー選択 active
        $blog = true;
        return view('blog',compact('blog'));
    }
}
