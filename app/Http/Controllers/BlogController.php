<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::all();
        return view('index')->with('blog',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('blog.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // 1. Add image validation
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        // 'image' => 'nullable|image|max:2048',  // Validates the file upload is an image and its size is not more than 2MB
    ]);

    $data = $request->only(['title', 'content']);

    // 2. Handle the image upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName); // This will save the image to public/images directory
        $data['image'] = $imageName; // Store the filename to save in the database
    }

    // 3. Insert the data
    Blog::create($data);

    return redirect('blog')->with('success', 'Blog created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::find($id);
        return view('show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            
            // $request ->validate([
            //     'title'=>'required',
            //     'content'=>'required',
            //     'category_id'=>'required',
            // ]);
            $blog=Blog::find($id);

            $blog->update($request->all());
            return redirect('blog')
            ->with('success','Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           
               Blog::destroy($id);
               return redirect('blog')->with('flash_message', 'blog deleted!'); 
    }
}
