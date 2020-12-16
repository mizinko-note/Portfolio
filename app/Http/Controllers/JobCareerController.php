<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    /**
     * Portfolio用、JobCareer用 Controller
     * @author mizinko
     */

class JobCareerController extends Controller
{
    /**
     * Topページ、初期表示
     * @param none
     * @return view
     */
    public function index(){
        // 左メニュー選択 active
        $jobCareer = true;
        return view('welcome',compact('jobCareer'));
    }
}
