<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontContoller extends Controller
{
    public function home(){
        return view('home',['page_name'=>'Home Pages']);
    }

    public function about(){
        return view("about",[
            'page_name'=>'About Page',
            'title'=>'About'
        ]);
    }

    public function service(){
        $page_name="Service page";

        $service_list=['computer','web','graphics','digital'];
    
        $product_count=10;
        $color="red";
        $product=[];
    
        return view('service',compact('page_name','service_list','product_count','color','product'));
    
    }

    public function contact(){
        
        $page_name='Contact Page';

        $title='Contact List';
    
        $products=[
            1=>[
                'name'=>'laptop',
                'color'=>"red",
                'price'=>3000
            ],
            2=>[
                'name'=>'laptop2',
                'color'=>"red",
                'price'=>3400
            ],
            3=>[
                'name'=>'laptop3',
                'color'=>"blue",
                'price'=>5000
            ]
            ];
    
        return view('contact',compact('page_name','title','products'));
    }
}
