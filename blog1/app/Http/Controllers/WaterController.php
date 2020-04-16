<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Blog1;

class WaterController extends Controller
{
    function index(){
    	//echo "Hello World! ".$id;
    	//return ['id'=>$id];
    	$posts = Blog1::all();
    	//return $posts;
    	//return view("water",['name'=>$posts,'id'=>'123']);

    	if(view::exists('waters')){
    		return view("waters",['name'=>$posts,'data'=>'Hello Myat Myat!!']);
    	}else{
    		return view('settings');
    	}
    }
}
