<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index')
        ->with('posts',Post::all());
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'discrption'=> 'required',
            'imag'=> 'required|mimes:png,jpg,webp|max:5048'

        ]);
        $slug = Str::slug($request->title,'-');
        $newimagename = uniqid() . '-' . $slug . '.' . $request->imag->extension();
        $request->imag->move(public_path('images'),$newimagename);

        Post::create([
            'title' => $request->input('title'),
            'discription' => $request->input('discrption'),
            'slug' => $slug,
            'img_path' => $newimagename,
            'user_id' => auth()->User()->id
        ]);

        return redirect('/blog');
    }

    public function show($id)
    {
        return view('blog.singel') -> with('post', Post::where('slug',$id)->first());
    }

    public function edit($id)
    {
        return view('blog.edit') -> with('post',Post::where('slug',$id)->first());
    }

    public function update(Request $request, $id)
    {
        $request -> validate([
            'title' => 'required',
            'discrption'=> 'required',
            'imag'=> 'required|mimes:png,jpg,webp|max:5048'
        ]);

        $newimagename = uniqid() . '-' . $id . '.' . $request->imag->extension();
        $request->imag->move(public_path('images'),$newimagename);

        Post::where('slug',$id)
        ->update([
            'title' => $request->input('title'),
            'discription' => $request->input('discrption'),
            'slug' => $id,
            'img_path' => $newimagename,
            'user_id' => auth()->User()->id
        ]);

        return redirect('/blog/'. $id)
        ->with('message','Edited successfully');
    }


    public function destroy($id)
    {
        Post::where('slug',$id)->delete();
        return redirect('/blog')
        ->with('message','delete successfully');
    }
}
