<?php

use App\Http\Controllers\Controller;

class PagesController extends Controller{

    public function about()
    {

        $first = 'Fox';

        $last='Mulder';

        return view('pages.about',compact('first','last'));
    }

}