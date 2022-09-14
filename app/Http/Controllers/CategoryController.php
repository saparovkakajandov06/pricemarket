<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getNewAjax(Request $request){
        if($request->ajax())
        {
            if($request->id > 0)
            {
                $data = \App\Domain\Product::where('id', '<', $request->id)
                    ->orderBy('id', 'DESC')
                    ->get();
            }
            else
            {
                $data = \App\Domain\Product::orderBy('id', 'DESC')
                    ->get();
            }
            $output = '';
            $last_id = '';

            echo $output;
        }
    }
}
