<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function console()
    {
        return "This controller was made using the following command in vagrant VM command line: php artisan make:controller ConsoleController";
    }
}
