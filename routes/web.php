<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//named route
/*
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about',function(){
    return view("about");
})->name('about');

Route::get('/service',function(){
    return view('service');
})->name('service');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');
*/


// parameter with route
// Route::get('/service/{service_id}',function($service_id){
//     return 'service'.$service_id;
// })->name('service');


// multipule parameter with route
// Route::get('/service/{service_id}/{service_name}',function($service_id,$service_name){
//     return 'service'.$service_id.$service_name;
// })->name('service');


// optional parameter with route
// Route::get('/service/{service_id}/{service_name?}',function($service_id,$service_name=null){
//     return 'service'.$service_id.$service_name;
// })->name('service');




// route parameter with regular expression & one parameter
// Route::get('/user/{name}',function($name){
//     echo $name;
// })->where('name','[A-Za-z]+');


/*

// route parameter with regular expression & multiple parameter
Route::get('/user/{id}/{name}',function($id,$name){
    echo $id,$name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);




// route parameter with regular expression & parameter check with array multiple value.
Route::get('/category/{category_name}',function($category_name){
    echo $category_name;
})->whereIn('category_name',['electornics','movie','books']);


*/





// ------------ passing data & rendering data with route and view

Route::get('/', function () {
    return view('home',['page_name'=>'Home Pages']);
})->name('home');

Route::get('/about',function(){
    return view("about",[
        'page_name'=>'About Page',
        'title'=>'About'
    ]);
})->name('about');

Route::get('/service',function(){

    $page_name="Service page";

    $service_list=['computer','web','graphics','digital'];

    $product_count=10;
    $color="red";
    $product=[];

    return view('service',compact('page_name','service_list','product_count','color','product'));

})->name('service');

Route::get('/contact',function(){
    
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

})->name('contact');






// ------------ Request Life cycle & response life cycle

Route::get('/', function (Request $request) {
    
    /*

    dd(
        $request->path(),
        $request->is('/'),
        $request->fullUrl(),
        $request->host(),
        $request->httpHost(),
        $request->schemeAndHttpHost(),
        $request->routeIs(),
        $request->header('X-Header-Name'),
        $request->header('x-header-name','default'),
        $request->bearerToken(),
        $request->ip(),
        $request->prefers(['text/html','application/json'])

    );
    */




    // response data

    /*
    $data=[
        'page_name'=>'Home Page',
        'Title'=>'HOme'
    ];

    return response($data)
    ->header('Content-Type','application/json')
    ->cookie('My IDcard','Mahmud Ibrahim',3600);

    */


    // another page redirect
    // return redirect('/contact');




    // json data response

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

        return response()->json([
            'product'=>$products,
            'title'=>$title
        ]);





    // return view('home',['page_name'=>'Home Pages']);
})->name('home');
