<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category/index',['category'=>$category]);
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show',['category'=>$category]);
    }

    public function latihan()
    {
        $category = new Category();
        $cat = $category->ambil();
        return view('category/latihan', ['cat'=>$cat]);
    }

    public function post(Request $request)
    {
        echo 'Nama: ' . $request->nama . '<br>';
        echo 'Email: ' . $request->email;
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file_cover' => 'required|file|image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'description' => 'required',
        ]);
        $category = new Category();
        $file = $request->file('file_cover');


        $file_name = time()."_".$file->getClientOriginalName();
        $destination = 'cover';
        $file->move($destination,$file_name);


        $category->title = $request->title;
        $category->description = $request->description;
        $category->file_cover = $file_name;
        $category->save();
        return redirect()->route('category.index');
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $category = Category::find($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();


        return redirect()->route('category.index')->with('success','Data kategori sudah berhasil diubah!');


    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success','Data kategori sudah berhasil dihapus!');
    }

}
