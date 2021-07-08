<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel!!!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('name',$title);
    }

    public function about(){
        $title = 'Aboutus';
        return view('pages.about',compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['web design','coding','networking']
        );
        return view('pages.services')->with($data);
    }
    
    public function contact(){
        return view('pages.contact',['users'=>['debashish','sam','asa']]);
    }
    public function users(){
        $data = ['sam','podh','debashish','daing'];
        return view('users',['users'=>$data]);
    }
}
