<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function goods()
    {
    	print_r($_GET);
    	echo "当前查询id为".$_GET['id'];	
    }
}
