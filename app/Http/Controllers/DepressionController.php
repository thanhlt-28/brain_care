<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepressionController extends Controller
{

    public function indexof1()
    {
        return view('dieu-tri.tramcam.index-3');
    }

    //Điều trị Hưng cảm
    public function indexof2()
    {
        return view('dieu-tri.hungcam.index-3');
    }
    //Điều trị Lo âu
    public function indexof3()
    {
        return view('dieu-tri.loau.index-3');
    }
    //Điều trị Hoảng loạn
    public function indexof4()
    {
        return view('dieu-tri.hoangloan.index-3');
    }
    //Điều trị Ám ảnh
    public function indexof5()

    {
        return view('dieu-tri.amanh.index-3');
    }
    //Điều trị Mất trí
    public function indexof6()
    {
        return view('dieu-tri.mattri.index-3');
    }
    //Điều trị Động kinh
    public function indexof7()
    {
        return view('dieu-tri.dongkinh.index-3');
    }
    //Điều trị Loạn thần
    public function indexof8()
    {
        return view('dieu-tri.loanthan.index-3');
    }
    //Điều trị Nghiện rượu
    public function indexof9()
    {
        return view('dieu-tri.nghienruou.index-3');
    }
}
