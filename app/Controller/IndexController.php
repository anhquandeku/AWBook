<?php

namespace App\Controller;

use App\Core\Auth;
use App\Core\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Auth::checkAuthentication();
    }

    public function index()
    {
        $this->View->render('home/index');
    }
}