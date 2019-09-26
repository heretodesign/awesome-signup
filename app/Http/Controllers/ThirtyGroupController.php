<?php

namespace App\Http\Controllers;

use App\ThirtyGroup;
use Illuminate\Http\Request;

class ThirtyGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thirtygroups = ThirtyGroup::latest()->paginate(25);
        
        return view('thirtygroup.index', compact('thirtygroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thirtygroup.create');
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

        ThirtyGroup::create($data);

        return redirect()->route('thirtygroups.index')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ThirtyGroup  $thirtyGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ThirtyGroup $thirtyGroup, $id)
    {
        $thirtygroups = TenGroup::findOrFail($id);

        return view('thirtygroup.show', compact('thirtygroups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThirtyGroup  $thirtyGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ThirtyGroup $thirtyGroup, $id)
    {
        $thirtygroups = TenGroup::findOrFail($id);

        return view('thirtygroup.edit', compact('thirtygroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThirtyGroup  $thirtyGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThirtyGroup $thirtyGroup)
    {
        $data = request()->validate([
            'university' => 'required',
            'enddate' => 'required',
            'discountrules' => 'required',
        ]);

        $thirtygroups->update($data);
  
        return redirect()->route('thirtygroups.index')
                        ->with('success','Discount updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThirtyGroup  $thirtyGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThirtyGroup $thirtyGroup, $id)
    {
        $thirtygroups = ThirtyGroup::findOrFail($id);
        $thirtygroups->delete();

        return redirect()->route('thirtygroups.index')
                        ->with('success','Discount deleted successfully');
    }
}
