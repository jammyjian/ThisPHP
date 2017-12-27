<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        //dd(app());
        $array =debug_backtrace();
        $html = '';
        //print_r($array);//信息很齐全
        unset($array[0]);
        foreach($array as $row)
        {
            $html .=$row['file'].':'.$row['line'].'行,调用方法:'.$row['function']."<p>";
        }
        echo $html;die;
    }

}
