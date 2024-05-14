<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blog = Blog::all();

        // $blog = Blog::find(2);
        // $blog->title = 'this is an updated one';
        // $blog->body = 'this is an updated one';
        // $blog->status = 1;
        // $blog->save();

        // $blog = Blog::where(['status' => 0, 'id' => 2])->get();

        // $blog = Blog::findOrFail(2);
        // $blog->delete();

        // dd($blog);

        // $blogs = Blog::with('category')->get();

        // foreach($blogs as $blog){
        //     echo $blog->title .' -> '.$blog->category->name;
        //     echo '</br>';
        // }

        // $category = Category::with('blogs')->find(1);

        // return $category;


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category' => ['required', 'integer'],
            'title' => ['required', 'max:255', 'min:2'],
            'body' => ['required'],
            'status' => ['required', 'boolean'],
            'image' => ['required', 'image', 'max:3000']
        ]);

        $imagePath = $this->uploadFile($request);

        $blog = new Blog();
        $blog->category_id = $request->category;
        $blog->image = $imagePath;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->status = $request->status;
        $blog->save();

        session()->flash('success', 'Your blog has been created successfully!');
        return redirect()->back();
    }

    public function uploadFile(Request $request) {
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            return $imagePath = 'uploads/'.$imageName;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
