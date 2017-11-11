<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        echo "This a demo page.";
    }
}
