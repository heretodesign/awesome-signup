<?php

namespace App\Http\Controllers;

use App\PlanC;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUpFormCMail;

class PlanCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signups = PlanC::latest()->paginate(25);
        return view('planc.index', compact('signups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discounts = DB::table('thirty_groups')->where('id', 1)->get();
        return view('/planc/create', ['discounts'=>$discounts]);
        // return view('planc.create');
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

        $student = PlanC::create($data);

        Mail::to($student->email)->send(new SignUpFormCMail());

        // Mail::to('test@test.com')->send(new SignUpFormCMail());

        return redirect('/')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanC  $planC
     * @return \Illuminate\Http\Response
     */
    public function show(PlanC $planC, $id)
    {
        $planC = PlanC::findOrFail($id);
        return view('planc.show', compact('planC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanC  $planC
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanC $planC, $id)
    {
        $planC = PlanC::findOrFail($id);
        return view('planc.edit', compact('planC'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanC  $planC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanC $planC)
    {
        $data = request()->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $planC->update($data);
  
        return redirect()->route('thirty.index')
                        ->with('success','Registration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanC  $planC
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanC $planC, $id)
    {
        $planC = PlanC::findOrFail($id);
        $planC->delete();

        return redirect()->route('thirty.index')
                        ->with('success','Registration deleted successfully');
    }
}
