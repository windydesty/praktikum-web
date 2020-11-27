<?php namespace App\Controllers;

class Auth extends BaseController
{

    public function index() 
{ return view('Auth/index/index.php');
} 

public function detailindex() 
{ return view('Auth/detailindex/detailindex.php');
} 

public function about() 
{ return view('Auth/about/about.php');
}

public function login() 
{ return view('Auth/login/login.php');
}

public function register() 
{ return view('Auth/register/register.php');
}

public function admin() 
{ return view('Auth/admin');
} 


}