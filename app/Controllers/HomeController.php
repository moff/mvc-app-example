<?php
namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index() {
        echo view('home.index');
    }
}