<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PerpusRequest;
use App\Perpus;
use Auth;

class PerpusController extends Controller
{
    public function displayUserBook()
    {
        $user_id = Auth::user()->id;
        $userBooks = Perpus::where('user_id', $user_id)->get();
        $status = 0;
        if(count($userBooks) > 0)
        {
            $status = 1;
        }        
        return view('admin.index',[
            'status' => $status,
            'books' => $userBooks,
        ]);
    }

    public function userDashboard()
    {
        return view('home');
    }

    public function displayCreateBookPage()
    {
        return view('admin.create');
    }

    public function createBook(PerpusRequest $request)
    {
        $data = $request->validated();
        $newPerpus = Perpus::create($data);
        return redirect()->route('admin.index')->with('status', 'Book Successfully Added');
    }

    public function displayEditBookPage($id)
    {
        $book = Perpus::findOrFail($id);
        return view('admin.edit',[
            'book' => $book,
        ]);
    }

    public function editBook(PerpusRequest $request, $id)
    {
        $data = $request->validated();
        $editedBook = Perpus::findOrFail($id)->update($data);
        return redirect()->route('admin.index')->with('status', 'Movie successfully updated');
    }

    public function displayDeleteBookPage($id)
    {
        $book = Perpus::findOrFail($id);
        return view('admin.delete',[
            'book' => $book,
        ]);
    }

    public function deleteBook($id)
    {
        $deletedBook = Perpus::findOrFail($id)->delete();
        return redirect()->route('admin.index')->with('status', 'Book Successfully Deleted');
    }

    public function showBook($id)
    {
        $book = Perpus::findOrFail($id);
        return view('admin.show',[
            'book' => $book,
        ]);
    }
}
