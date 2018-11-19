<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/11
 * Time: 16:39
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function getApp()
    {
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }
}