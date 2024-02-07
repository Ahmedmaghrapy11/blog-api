<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return response()->json(['blogs' => $blogs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string|min:100'
        ]);
        $blog = Blog::create($validatedData);
        return response()->json(['message' => 'A new blog is created successfully!', 'blog' => $blog]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if ($blog) {
                return response()->json(['blog' => $blog]);
            }
        } catch (ModelNotFoundException $th) {
            return response()->json(['message' => 'This blog does not exist.']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:100',
                'content' => 'required|string|min:100'
            ]);
            $blog = Blog::findOrFail($id);
            if ($blog) {
                $blog->update($validatedData);
                return response()->json(['message' => 'This blog is updated successfully!', 'blog' => $blog]);
            }
        } catch (ModelNotFoundException $th) {
            return response()->json(['message' => 'This blog does not exist.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if ($blog) {
                $blog->delete();
                return response()->json(['message' => 'Blog is deleted successfully!']);
            }
        } catch (ModelNotFoundException $th) {
            return response()->json(['message' => 'This blog does not exist.']);
        }
    }
}
