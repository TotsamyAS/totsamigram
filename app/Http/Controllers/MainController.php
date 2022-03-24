<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class MainController extends Controller
{
    public function hello_world_view_method(Request $request)
    {
        $query=$request->all();
        return view('Hello_World', compact('query'));
    }
    public function index(Request $request): View
    {
        $query=$request->all();
        return view('welcome', compact('query'));
    }

    public function test_view_1_method(Request $request)
    {
        $query=$request->all();
        return view('test-view-1', compact('query'));
    }
    public function test_view_2_method(Request $request)
    {
        $query=$request->all();
        return view('test-view-2', compact('query'));
    }

    public function func(Request $request)
    {
        dump(var: 1);
        dd($request);

    }
}
