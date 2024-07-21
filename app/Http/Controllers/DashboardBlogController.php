<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blogs.index', [
            'title'=>'My Blogs',
            'blogs' => Blog::where('author_id', auth()->user()->id)->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blogs.create', ['title' => 'Create New Blog', 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required',
            'slug' => 'required|unique:blogs',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        // $validatedData['author_id'] = auth()->user()->id;


        // dd($validatedData); 

        Blog::create($validatedData);
        return redirect('/dashboard/blogs')->with('success', 'New Blog Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show', ['title' => 'Detail Blog', 'blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
         return view('dashboard.blogs.update', ['title' => 'Update Blog', 'blog' => $blog, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'author_id' => 'required',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if($request->slug != $blog->slug){
            $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        Blog::where('id', $blog->id)->update($validatedData);
        return redirect('/dashboard/blogs')->with('success', 'Blog Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);
        return redirect('/dashboard/blogs')->with('success', 'Blog Has Been Deleted!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
