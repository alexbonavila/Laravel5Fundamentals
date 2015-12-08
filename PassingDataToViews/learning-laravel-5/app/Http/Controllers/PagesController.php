<?php

use App\Http\Controllers\Controller;

class PagesController extends Controller{

    public function about()
    {

        $name='Jefffrey <span style="color:red;">Way</span>';

        return view('pages.about')->with('name',$name);
    }

}