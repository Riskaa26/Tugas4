<?php

namespace  App\Http\Controllers;

class HomeController extends Controller{

function showHome(){
    return view('template3.Home');
}

function showProduct(){
        return view('template3.Product');
}

function showCategory(){
    return view('template3.Category');
}

function showPromo(){
    return view('template3.Promo');

}


}
