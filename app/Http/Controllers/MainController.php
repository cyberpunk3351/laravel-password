<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Pass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PassRequest;

class MainController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function log(Request $request)
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $user = $currentuser->name;
        $role = Role::find($id);
        $rolename = $role->title;

        $password = Pass::join('categories', 'category_id', '=', 'categories.id')->where('user_id', '=', $id)->get();

        return view('index', compact('rolename', 'user', 'password'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PassRequest $request)
    {   
        $pass = new Pass();
        $id = Auth::user()->id;
        $pass->pass = $request->pass;
        $pass->user_id = $id;
        $pass->category_id = rand(1,2);
        $pass->save();
        return view('index');
    }
}