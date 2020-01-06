<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaesarController extends Controller
{
    public function caesar()
    {
    	$mm=$_GET['mm'];
    	dd($mm);	
    }
}
