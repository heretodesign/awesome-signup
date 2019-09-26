<?php

namespace App\Http\Controllers;

use App\TwentyGroup;
use Illuminate\Http\Request;

class TwentyGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twentygroups = TwentyGroup::latest()->paginate(25);
        
        return view('twentygroup.index', compact('twentygroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('twentygroup.create');
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

        TwentyGroup::create($data);

        return redirect()->route('twentygroups.index')->with('success','Message has been sent to Us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TwentyGroup  $twentyGroup
     * @return \Illuminate\Http\Response
     */
    public function show(TwentyGroup $twentyGroup, $id)
    {
        $twentygroups = TwentyGroup::findOrFail($id);
        return view('twentygroup.show', compact('twentygroups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TwentyGroup  $twentyGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(TwentyGroup $twentyGroup, $id)
    {
        $twentygroups = TwentyGroup::findOrFail($id);
        return view('twentygroups.edit', compact('twentygroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TwentyGroup  $twentyGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TwentyGroup $twentyGroup)
    {
        $data = request()->validate([
            'university' => 'required',
            'enddate' => 'required',
            'discountrules' => 'required',
        ]);

        $twentygroups->update($data);
  
        return redirect()->route('twentygroups.index')
                        ->with('success','Discount updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TwentyGroup  $twentyGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TwentyGroup $twentyGroup, $id)
    {
        $twentygroups = TwentyGroup::findOrFail($id);
        $twentygroups->delete();

        return redirect()->route('twentygroups.index')
                        ->with('success','Discount deleted successfully');
    }
}
