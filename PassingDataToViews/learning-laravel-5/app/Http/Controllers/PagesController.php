<?php

use App\Http\Controllers\Controller;

class PagesController extends Controller{

    public function about()
    {

        $data= [];

        $data['first'] = 'Douglas';

        $data['last'] = 'Quaid';

        return view('pages.about',$data);
    }

}