<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginCont extends BaseController
{
    public function index()
    {
        return view('C_Login');
    }
}
