<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\User;

class FrontendController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['welcome']]);
    }


    public function index()
    {
        $books = Books::paginate(10);
        return view('welcome' , compact('books'))->with('users' , User::all());
    }



    public function show($id)
    {
        $show = Books::find($id);

        return view('show' , compact('show'))->with('users' , User::all());
    }


}
