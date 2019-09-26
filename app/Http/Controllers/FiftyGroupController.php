<?php

namespace App\Http\Controllers;

use App\FiftyGroup;
use Illuminate\Http\Request;

class FiftyGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiftygroups = FiftyGroup::latest()->paginate(25);
        
        return view('fiftygroup.index', compact('fiftygroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fiftygroup.create');
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

        FiftyGroup::create($data);

        return redirect()->route('fiftygroups.index')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FiftyGroup  $fiftyGroup
     * @return \Illuminate\Http\Response
     */
    public function show(FiftyGroup $fiftyGroup, $id)
    {
        $fiftygroups = FiftyGroup::findOrFail($id);

        return view('fiftygroup.show', compact('fiftygroups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FiftyGroup  $fiftyGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(FiftyGroup $fiftyGroup, $id)
    {
        $fiftygroups = FiftyGroup::findOrFail($id);
        
        return view('fiftygroup.edit', compact('fiftygroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FiftyGroup  $fiftyGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FiftyGroup $fiftyGroup)
    {
        $data = request()->validate([
            'university' => 'required',
            'enddate' => 'required',
            'discountrules' => 'required',
        ]);

        $fiftygroups->update($data);
  
        return redirect()->route('fiftygroups.index')
                        ->with('success','Discount updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FiftyGroup  $fiftyGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FiftyGroup $fiftyGroup, $id)
    {
        $fiftygroups = FiftyGroup::findOrFail($id);
        $fiftygroups->delete();

        return redirect()->route('fiftygroups.index')
                        ->with('success','Discount deleted successfully');
    }
}
