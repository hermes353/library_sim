<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'book_name' => ['required', 'string', 'max:255'],
        ]);

        $book = new Book([
            'name' => $request->input('book_name'),
            'owner_id' => Auth::id(),
        ]);

        if($book->save())
            return redirect('dashboard')->with('book_saved_successfully', 'SUCCESS: book saved successfully');
        else
            return redirect()->back()->with('book_save_failed', 'ERROR: book did not save successfully');

    }

    public function destroy($id){

        if(Book::destroy($id))
            return redirect()->back()->with('book_delete_success', 'SUCCESS: book was deleted');
        else
            return redirect()->back()->with('book_delete_fail', 'ERROR: book could not be deleted');

    }
}
