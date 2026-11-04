<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
           ['title' =>'Noli Me Tangere', 'author' => 'Jose Rizal'],
           ['tile' => 'florante at laura', 'author' => 'Flancisco Balagtas'],
        ];
        return view('books.index', ['books' => $books]);  
    }    
}
