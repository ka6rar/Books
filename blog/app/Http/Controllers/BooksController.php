<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\User;
use Auth;
class BooksController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   

 

    public function create()

    {
        
            $books = Books::all();
            
            return view('Books.book' , compact('books'));

        


    }

 
    public function stsore(Request $request)
    {
        $this->validate($request , [
        'title' => 'required',
        'text'  =>  'required',
        'picture' => 'required|mimes:jpeg,bmp,png',

        ]);

         
        $picture = $request->picture;
        $picture_new = time() . $picture->getClientOriginalExtension();
        $picture->move('uplode/book/' , $picture_new);
        $picture->$picture = $picture_new;


        $book = new Books;

        $book->title   = $request->title;
        $book->text    = $request->text;
        $book->name    = Auth::user()->id;
        $book->picture =  ('uplode/book/' . $picture_new);
        $book->save();

         return redirect()->back()->with('seuccs' , 'seuccs');

    }

    public function edit($id)
    {
        $books = Books::find($id);

        return view('Books.edit' , compact('books'));
    }

  
    public function update(Request $request, $id)
    {
      
         $this->validate($request ,[
        'title' => 'required',
        'text'  =>  'required',
        'picture' => 'required||mimes:jpeg,bmp,png'
         ]);
        
        $picture = $request->picture;
        $picture_new = time() . $picture->getClientOriginalExtension();
        $picture->move('uplode/book/' , $picture_new);
        $picture->$picture = $picture_new;
    


        $books =  Books::find($id);
        $books->title   = $request->title;
        $books->text    = $request->text;
        $book->name    = Auth::user()->id;
        $books->picture = ('uplode/book/' . $picture_new);
        $books->save();

        return   redirect()->back();  
       
           

      
    }

    public function destroy($id)
    {
        $books = Books::find($id);
        $books->delete();
       
         return redirect('Books/book')->with('eeror' , 'Delete Seuccs ');
    }
}
