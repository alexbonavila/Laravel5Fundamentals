<?php

use App\Http\Controllers\Controller;

class PagesController extends Controller{

    public function about()
    {



        return view('pages.about')->with([

            'first'=> 'Jeffrey',

            'last'=> 'Way'

        ]);
    }

}