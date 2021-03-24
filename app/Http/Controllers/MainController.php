<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $user = $currentuser->name;
        $role = Role::find($id);
        $rolename = $role->title;

        return view('index', compact('rolename', 'user'));
    }
}