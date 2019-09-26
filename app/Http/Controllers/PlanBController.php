<?php

namespace App\Http\Controllers;

use App\PlanB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUpFormBMail;
use App\Events\SignUpForTwentyGroupDiscountEvent;


class PlanBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signups = PlanB::latest()->paginate(25);
        return view('planb.index', compact('signups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discounttwo = DB::table('twenty_groups')->where('id', 1)->get();
        return view('/planb/create', ['discounttwo'=>$discounttwo]);
        // return view('planb.create');
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

        $student = PlanB::create($data);

        event(new SignUpForTwentyGroupDiscountEvent($student));

        // Mail::to($student->email)->send(new SignUpFormBMail());
        
        // Mail::to('test@test.com')->send(new SignUpFormBMail());

        return redirect('/')->with('success','Message has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanB  $planB
     * @return \Illuminate\Http\Response
     */
    public function show(PlanB $planB, $id)
    {
        $planB = PlanB::findOrFail($id);
        return view('planb.show', compact('planB'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanB  $planB
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanB $planB, $id)
    {
        $planB = PlanB::findOrFail($id);
        return view('planb.edit', compact('planB'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanB  $planB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanB $planB)
    {
        $data = request()->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $planB->update($data);
  
        return redirect()->route('twenty.index')
                        ->with('success','Registration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanB  $planB
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanB $planB, $id)
    {
        $planB = PlanB::findOrFail($id);
        $planB->delete();

        return redirect()->route('twenty.index')
                        ->with('success','Registration deleted successfully');
    }
}
