<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Wink\WinkTag;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = WinkTag::with(['posts' => function ($query) {
            $query->orderBy('slug', 'asc');
        }])->orderBy('slug', 'asc')->get();

        $about = WinkPost::where('slug', 'about')->first();

        return view('landing', ['chapters' => $tags, 'about' => $about]);
    }

    /**
     * Display the specified resource.
     *
     * @param String $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(String $slug)
    {
        $term = WinkPost::where('slug', $slug)->firstOrFail();

        return view('term', ['term' => $term]);
    }
}
