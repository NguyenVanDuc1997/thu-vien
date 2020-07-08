<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LibraryController extends Controller
{
    //
    protected $library;

    public function __construct(Library $library)
    {
        $this->library = $library;
    }

    public function index()
    {
        $libraries = $this->library->all();
        return view('library.index', compact('libraries'));
    }

    public function create()
    {
        return view('library.create');
    }

    public function store(Request $request)
    {
        $library = new Library();
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $library->image = $path;
        }
        $library->save();
        return redirect()->route('library.index');
    }

    public function edit($id)
    {
        $library = Library::query()->findOrFail($id);
        return view('library.edit', compact('library'));
    }

    public function update(Request $request, $id)
    {
        $library = Library::query()->findOrFail($id);
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        if ($request->hasFile('image')) {
            $currentImage = $library->image;
            if ($currentImage){
                Storage::delete('/public/'.$currentImage);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $library->image = $path;
        }
        $library->save();
        return redirect()->route('library.index');
    }

    public function destroy($id){
        $library = Library::query()->findOrFail($id);
        $image = $library->image;
        if ($image){
            Storage::delete('/public/'.$image);
        }
        $library->delete();
        return redirect()->route('library.index');
    }
}
