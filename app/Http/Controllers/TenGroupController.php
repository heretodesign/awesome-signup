<?php

namespace App\Http\Controllers;

use App\TenGroup;
use Illuminate\Http\Request;

class TenGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tengroups = TenGroup::latest()->paginate(25);
        
        return view('tengroup.index', compact('tengroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tengroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'university', 'enddate', 'discountrules'
        $data = request()->validate([
            'university' => 'required',
            'enddate' => 'required',
            'discountrules' => 'required'
        ]);

        TenGroup::create($data);

        return redirect()->route('tengroups.index')->with('success','Message has been sent to Us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TenGroup  $tenGroup
     * @return \Illuminate\Http\Response
     */
    public function show(TenGroup $tenGroup, $id)
    {
        $tengroups = TenGroup::findOrFail($id);
        return view('tengroup.show', compact('tengroups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TenGroup  $tenGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(TenGroup $tenGroup, $id)
    {
        $tengroups = TenGroup::findOrFail($id);
        
        return view('tengroup.edit', compact('tengroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TenGroup  $tenGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenGroup $tenGroup)
    {
        
        $data = request()->validate([
            'university' => 'required',
            'enddate' => 'required',
            'discountrules' => 'required',
        ]);

        $tengroups->update($data);
  
        return redirect()->route('tengroups.index')
                        ->with('success','Discount updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TenGroup  $tenGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenGroup $tenGroup, $id)
    {
        $tengroups = TenGroup::findOrFail($id);
        $tengroups->delete();

        return redirect()->route('tengroups.index')
                        ->with('success','Discount deleted successfully');
    }
}
