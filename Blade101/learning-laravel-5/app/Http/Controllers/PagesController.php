<?php

use App\Http\Controllers\Controller;

class PagesController extends Controller{

    public function about()
    {

        $first = 'Fox';

        return view('pages.about',compact('first'));
    }


    public function contact()
    {
        return view('pages.contact');
    }


}