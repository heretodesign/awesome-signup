<?php

namespace App\Http\Controllers;

use App\PlanD;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUpFormDMail;

class PlanDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signups = PlanD::latest()->paginate(25);
        return view('pland.index', compact('signups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discounts = DB::table('fifty_groups')->where('id', 1)->get();
        return view('/pland/create', ['discounts'=>$discounts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
        ]);
 
        $student = PlanD::create($data);

        Mail::to($student->email)->send(new SignUpFormDMail());

        // Mail::to('test@test.com')->send(new SignUpFormDMail());

        return redirect('/')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanD  $planD
     * @return \Illuminate\Http\Response
     */
    public function show(PlanD $planD, $id)
    {
        $planD = PlanD::findOrFail($id);
        return view('pland.show', compact('planD'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanD  $planD
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanD $planD, $id)
    {
        $planD = PlanD::findOrFail($id);
        return view('pland.edit', compact('planD'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanD  $planD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanD $planD)
    {
        $data = request()->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $planD->update($data);
  
        return redirect()->route('fifty.index')
                        ->with('success','Registration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanD  $planD
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanD $planD, $id)
    {
        $planD = PlanD::findOrFail($id);
        $planD->delete();

        return redirect()->route('fifty.index')
                        ->with('success','Registration deleted successfully');
    }
}
