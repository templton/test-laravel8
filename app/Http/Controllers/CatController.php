<?php

namespace App\Http\Controllers;

use App\Jobs\CatCreateJob;
use App\Models\Cat;
use App\Models\Owner;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Cat::all();

        CatCreateJob::dispatch($cats[0]);

        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owners = Owner::all();

        return view('cats.create', compact('owners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Cat $cat)
    {
        $owners = Owner::all();

        return view('cats.edit', compact('owners', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $request->validate([
            'name' => 'required',
            'owner_id' => 'required',
        ]);

        $cat->update($request->all());

        return redirect()->route('cats.index')->with('success', "Cat $cat->name updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        $name = $cat->name;
        $cat->delete();

        return redirect()->route('cats.index')->with('success', "Cat $name deleted successfully");
    }
}
