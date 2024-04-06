<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.posts.index',[
            'posts' => Post::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.posts.create');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:20',
            'category' => 'required|max:20',
            'image' => 'image|mimes:jpeg,png,jpg,gif|min:2',
            'video' => 'required' // Validasi tautan video
        ]);
        // Periksa apakah ada gambar atau tautan video yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari penyimpanan
            Storage::delete($post->image);
            // Simpan gambar baru dan perbarui path di dalam model
            $validatedData['image'] = $request->file('image')->store('post-image');
        } elseif ($request->input('category') === 'videografi') {
            // Jika kategori adalah "Videografi" dan tidak ada gambar, tetapi ada tautan video
            $validatedData['video'] = $request->input('video');
        }
    
        $validatedData['id'] = auth()->user()->id;
        Post::create($validatedData);
        return redirect('/dashboard/post')->with('success', 'New Post added!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $Post)
    {
        return view('Dashboard.posts.show',[
            'posts'=> $Post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Post)
    {
        return view('Dashboard.posts.edit',[
            'posts'=> $Post
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:20',
            'category' => 'required|max:20',
            'image' => 'image|mimes:jpeg,png,jpg,gif|min:2',
            'video' => 'required_if:category,videografi', // Validasi tautan video hanya jika kategori adalah "videografi"
        ]);
    
        // Periksa apakah ada gambar yang diunggah dan perbarui jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari penyimpanan
            Storage::delete($post->image);
    
            // Simpan gambar baru dan perbarui path di dalam model
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
    
        // Periksa apakah kategori telah diubah menjadi "videografi" dan ada tautan video
        if ($request->input('category') === 'videografi' && $request->has('video')) {
            $validatedData['video'] = $request->input('video');
        } else {
            // Jika tidak, pastikan kolom 'video' kosong jika bukan kategori "videografi"
            $validatedData['video'] = null;
        }
    
        $post->update($validatedData);
    
        return redirect('/dashboard/post')->with('success', 'Post updated!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $Post)
    {
        if($Post->image){
            Storage::delete($Post->image);
        }
        $Post->delete();
        return redirect('/dashboard/post')->with('success', 'Post Delete!');
    }
}
