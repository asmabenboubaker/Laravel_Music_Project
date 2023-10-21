<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
use App\Models\Blog;

class CategorieController extends Controller
{
    // CategoryController.php

public function index()
{
    $categories = Categorie::all();
//get categories from blogcontroler
    $cat = new BlogController();
    $cat->getCategories();
    return view('categories.index', ['categories' => $cat]);
}

public function create()
{

    return view('categories.create');
}

public function store(Request $request)
{
    Categorie::create($request->all());
    return redirect()->route('categories.index');
}

public function edit($id)
{
    $blog=Blog::find($id);
    return view('blog.edit')->with('blog',$blog);
}

public function update(Request $request, $id)
{
   $blog=Blog::find($id);
   $input=$request->all();
    $blog->update($input);
    return redirect('blog')->with('flash_message', 'blog Updated!');
}

public function destroy(Categorie $category)
{
    $category->delete();
    return redirect()->route('categories.index');
}

}
