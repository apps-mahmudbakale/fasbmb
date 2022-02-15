<?php

namespace App\Http\Controllers;

use App\Models\Law;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laws = Law::all();

        return view('admin.laws.index', compact('laws'));
    }


    public function view()
    {
        $slug = 'membership-and-delegates';
        $chapter = Law::where('slug', $slug)->firstOrFail();

        $previous = Law::where('id', '<', $chapter->id)->orderBy('id','desc')->first();

        $next = Law::where('id', '>', $chapter->id)->orderBy('id')->first();


        return view('laws', ['chapter' => $chapter, 'previous' => $previous, 'next' => $next]);

        
    }

    public function viewChapter($slug)
    {
        $chapter = Law::where('slug', $slug)->firstOrFail();

        $previous = Law::where('id', '<', $chapter->id)->orderBy('id','desc')->first();

        $next = Law::where('id', '>', $chapter->id)->orderBy('id')->first();


        return view('laws', ['chapter' => $chapter, 'previous' => $previous, 'next' => $next]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laws.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $law = Law::create([
                'name' => $request->name,
                'content' => $request->content,
                'slug' => Str::slug($request->name,'-'),
        ]);

        return redirect()->route('admin.law.index')->with('success', 'Chapter Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function show(Law $law)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function edit(Law $law)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Law $law)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function destroy(Law $law)
    {
        //
    }
}
