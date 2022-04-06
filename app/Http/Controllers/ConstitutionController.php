<?php

namespace App\Http\Controllers;

use App\Models\Constitution;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consts = Constitution::all();

        return view('admin.constitutions.index', compact('consts'));
    }


    public function view()
    {
        $slug = 'chapter-one';
        $chapter = Constitution::where('slug', $slug)->firstOrFail();

        $previous = Constitution::where('id', '<', $chapter->id)->orderBy('id','desc')->first();

        $next = Constitution::where('id', '>', $chapter->id)->orderBy('id')->first();


        return view('constitution', ['chapter' => $chapter, 'previous' => $previous, 'next' => $next]);
    }

    public function viewChapter($slug)
    {
        $chapter = Constitution::where('slug', $slug)->firstOrFail();

        $previous = Constitution::where('id', '<', $chapter->id)->orderBy('id','desc')->first();

        $next = Constitution::where('id', '>', $chapter->id)->orderBy('id')->first();


        return view('constitution', ['chapter' => $chapter, 'previous' => $previous, 'next' => $next]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.constitutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $const = Constitution::create([
                'name' => $request->name,
                'content' => $request->content,
                'slug' => Str::slug($request->name,'-'),
        ]);

        return redirect()->route('admin.constitution.index')->with('success', 'Chapter Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function show(Constitution $constitution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function edit(Constitution $constitution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constitution $constitution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constitution $constitution)
    {
        $constitution->delete();

        return back();
    }
}
