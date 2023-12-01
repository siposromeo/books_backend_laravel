<?php
//  php artisan make:controller BookController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return response()->json($books);
    }

    function getAllAuthors(){
        $authors = Book::select('Author')
                ->distinct()
                ->orderBy('Author')
                ->get();
        
        $arr = [];
        foreach($authors as $key => $value){
            $arr[] = $value->Author;
        }

        return $arr;
    }

    function bookByAuthor($authorName){
        $filteredBooks = Book::where('Author','=',$authorName)->get();

        return response()->json($filteredBooks);
    }
}
