<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;

class FooController extends Controller
{
    public function index(TestRequest $request)
    {
        //return $request->get('foo');
        
        return request()->get('foo');
    }
}
