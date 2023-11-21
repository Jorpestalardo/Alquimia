<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();

        return view('blog.index', [
            'blogs' => $blogs,
        ]);
    }

    public function blogDetalle(int $id)
    {
        $blog = Blog::findOrFail($id);
        $formattedDate = Carbon::now()->format('d-m-Y');

        return view('blog.detalle', [
            'blog' => $blog,
            'formattedDate' => $formattedDate,
        ]);
    }

    public function index()
    {
        $blogs = Blog::with(['etiquetas'])->get();

        return view('blog.index', [
            'blogs' => $blogs,
        ]);
    }
}