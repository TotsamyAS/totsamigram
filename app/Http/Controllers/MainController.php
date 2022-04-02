<?php

namespace App\Http\Controllers;

use App\Models\UserInformation;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class MainController extends Controller
{
    public function register(Request $request): \Illuminate\Http\RedirectResponse
    {
        /*dd($request->date('birthday'));*/
        /** @var \App\Models\User $user */
        $user=\App\Models\User::create([
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
        'password'=>Hash::make($request->get('password'))
        ]);
        $user->information()->create([
            'name' => $request->get('username'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age'),
            'birthday'=>$request->date('birthday')

        ]);
        return to_route('home');
    }

    public function profile(int $id)
    {
        /*User::find($id);*/
        $user= \App\Models\User::where('id',$id)->first();
        dd($user->information);
return \view('profile');
    }

    public function index(Request $request): View
    {
        $query=$request->all();
        return view('welcome', compact('query'));
    }
    /*public function hello_world_view_method(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $query=$request->all();
        return view('Hello_World', compact('query'));
    }
    public function test_view_1_method(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $query=$request->all();
        return view('test-view-1', compact('query'));
    }
    public function test_view_2_method(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $query=$request->all();
        return view('test-view-2', compact('query'));
    }*/

    public function func(Request $request)
    {
        dump(var: 1);
        dd($request);

    }
}
