<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use App\User;
use App\Books;
use Auth;
use Illuminate\Support\Facades\Storage;

class Usercontroller extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
   if (Auth()->user()->admin == 1)
    {
        $users = User::all();
        return view('User.user' , compact('users'))->with('books' , Books::all());
    }else
     {
    
        return redirect()->back()->with('eeror' , 'You are not addicted');
     }
 
    }

    public function books()
    {
        $books = Books::all();
        if (Auth::user()->admin == 1) {
            return view('User.books' , compact('books'));
        }else{
             return redirect()->back()->with('eeror' , 'You are not addicted');
        }
       
    }

    public function admin($id)
    {
      $admin = User::find($id);
      $admin->admin = 1;
      $admin->save();
      return redirect()->back();
    }



     public  function destroy($id)
     {
         $book = Books::find($id);

         $book->delete();
         return redirect()->back();

     }

     public function edit($id){
        
     $book = Books::find($id);
     if (Auth::user()->admin == 1) {
        return view('User.edit' , compact('book'));
    }else {
        return redirect()->back()->with('eeror' , 'You are not addicted');
    }
    }


    public function update(Request $request , $id){

       $this->validate($request , [

        'title' => 'required',
        'text' => 'required',
        'picture' => 'required|mimes:jpeg,bmp,png',

       ]);
        $picture = $request->picture;
        $picture_new = time().$picture->getClientOriginalExtension();
        $picture->move('uplode/book/' , $picture_new);
        $picture->picture = $picture_new;

        $book = Books::find($id);
        $book->title = $request->title;
        $book->text = $request->text;
        $book->name    = Auth::user()->id;
        $book->picture = ('uplode/book/' .$picture_new);
        $book->save();
        return redirect('User/books')->with('seuccs' , 'Seuccs Update');
        
    }

    public  function deldet($id)
    {
        $book = User::find($id);
        $book->delete();
        return redirect()->back()->with('seuccs' , 'Seuccs Update');

    }
}
