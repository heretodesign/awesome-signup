<?php

namespace App\Http\Controllers;

use App\PlanA;
use App\Events\SignUpForTenGroupDiscountEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUpFormMail;


class PlanAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signups = PlanA::latest()->paginate(25);
        
        return view('plana.index', compact('signups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discounts = DB::table('ten_groups')->where('id', 1)->get();

        return view('/plana/create', ['discounts'=>$discounts]);
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

        $student = PlanA::create($data);

        event(new SignUpForTenGroupDiscountEvent($student));

        // Mail::to($student->email)->send(new SignUpFormMail());

        return redirect('/')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanA  $planA
     * @return \Illuminate\Http\Response
     */
    public function show(PlanA $planA, $id)
    {
        $planA = PlanA::findOrFail($id);
        return view('plana.show', compact('planA'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanA  $planA
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanA $planA, $id)
    {
        $planA = PlanA::findOrFail($id);
        return view('plana.edit', compact('planA'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanA  $planA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanA $planA)
    {
        $data = request()->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $planA->update($data);
  
        return redirect()->route('ten.index')
                        ->with('success','Registration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanA  $planA
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanA $planA, $id)
    {
        $planA = PlanA::findOrFail($id);
        $planA->delete();

        return redirect()->route('ten.index')
                        ->with('success','Registration deleted successfully');
    }
}
