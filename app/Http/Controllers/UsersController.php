<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function loadView($user){
        return view("users",['name'=>$user]);
    }
    function ShowUsers(){
        $data=['Nazim', 'Tasnim', 'Akash' ,'Shaikat'];
        return view("users",['users'=>$data]);
    }
}
