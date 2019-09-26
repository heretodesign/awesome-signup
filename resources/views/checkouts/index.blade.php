@extends('layouts.app')

@section('content')
<div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Make Payment</h2>
        </div>
        <div class="h-12 w-1/2 mt-5">
          <div class="pull-right">
              <a class="block uppercase bg-blue hover:bg-blue-dark text-white font-bold py-3 px-10 rounded" href="{{ route('admin.dashboard') }}"> Back to Dashboard</a>
          </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <section class="section">
            <div class="container">
                <div class="columns is-mobile">
                  <div class="column is-half is-offset-one-quarter">
                    <div>
                        <table class="table">
                          <thead>
                            <tr>
                            <th><abbr title="Played">id</abbr></th>
                              <th><abbr title="Won">promo</abbr></th>
                              <th><abbr title="Drawn">email</abbr></th>
                              <th><abbr title="Lost">address</abbr></th>
                              <th><abbr title="Played">city</abbr></th>
                              <th><abbr title="Won">state</abbr></th>
                              <th><abbr title="Drawn">country</abbr></th>
                              <th><abbr title="Lost">phone</abbr></th>
                              <th><abbr title="Played">Name on Card</abbr></th>
                              <th><abbr title="Won">Card Number</abbr></th>
                              <th><abbr title="Drawn">Validity</abbr></th>
                              <th><abbr title="Lost">CVC</abbr></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($checkouts as $checkout)
                                <tr class="bg-grey-darkest">
                                    <td>{{ $checkout->id }}</td>
                                    <td>{{ $checkout->promo }}</td>
                                    <td>{{ $checkout->email }}</td>
                                    <td>{{ $checkout->address }}</td>
                                    <td>{{ $checkout->city }}</td>
                                    <td>{{ $checkout->state }}</td>
                                    <td>{{ $checkout->country }}</td>
                                    <td>{{ $checkout->phone }}</td>
                                    <td>{{ $checkout->name_on_card }}</td>
                                    <td>{{ $checkout->card_number }}</td>
                                    <td>{{ $checkout->validity }}</td>
                                    <td>{{ $checkout->cvc }}</td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
