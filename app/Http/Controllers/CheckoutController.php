<?php

namespace App\Http\Controllers;

use App\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts = Checkout::latest()->paginate(25);

        return view('checkouts.index', compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkout = new Checkout();
        $checkout->promo = request('promo');
        $checkout->email = request('email');
        $checkout->address = request('address');
        $checkout->city = request('city');
        $checkout->state = request('state');
        $checkout->country = request('country');
        $checkout->phone = request('phone');
        $checkout->name_on_card = request('name_on_card');
        $checkout->card_number = request('card_number');
        $checkout->validity = request('validity');
        $checkout->cvc = request('cvc');
        $checkout->save();

        // $checkout = Checkout::create($data;

        return redirect('/hom')->with('success','Created a New Checkout Payment.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->update($this->validateRequest());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }

    protected function validateRequest()
    {
        return request()->validate([
            'promo' => 'required',
            'email' => 'required|email',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:200',
            'country' => 'required|max:255',
            'phone' => 'required|max:200',
            'name_on_card' => 'required|max:160',
            'card_number' => 'required',
            'validity' => 'required|max:200',
            'cvc' => 'required|max:200'
        ]);
    }
}
