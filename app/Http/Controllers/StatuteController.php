<?php

namespace App\Http\Controllers;

use App\Models\Statute;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StatuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = Statute::all();

        return view('admin.statute.index', compact('stats'));
    }


    public function view()
    {
        $slug = 'statute-1';
        $chapter = Statute::where('slug', $slug)->firstOrFail();

        $previous = Statute::where('id', '<', $chapter->id)->orderBy('id','desc')->first();

        $next = Statute::where('id', '>', $chapter->id)->orderBy('id')->first();


        return view('statute', ['chapter' => $chapter, 'previous' => $previous, 'next' => $next]);
    }

    public function viewChapter($slug)
    {
        $chapter = Statute::where('slug', $slug)->firstOrFail();

        $previous = Statute::where('id', '<', $chapter->id)->orderBy('id','desc')->first();

        $next = Statute::where('id', '>', $chapter->id)->orderBy('id')->first();


        return view('statute', ['chapter' => $chapter, 'previous' => $previous, 'next' => $next]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $stat = Statute::create([
                'name' => $request->name,
                'content' => $request->content,
                'slug' => Str::slug($request->name,'-'),
        ]);

        return redirect()->route('admin.statute.index')->with('success', 'Chapter Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statute  $statute
     * @return \Illuminate\Http\Response
     */
    public function show(Statute $statute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statute  $statute
     * @return \Illuminate\Http\Response
     */
    public function edit(Statute $statute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statute  $statute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statute $statute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statute  $statute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statute $statute)
    {
        //
    }
}
