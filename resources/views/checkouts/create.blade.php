@extends('layouts.app')

@section('content')
  <section class="section">
      <div class="container">
          <div class="columns is-mobile">
            <div class="column is-half is-offset-one-quarter">
              <div>
                  <h2 class="title is-3">
                    Stripes Checkout
                </h2> <br> <br>
              </div>
            </div>
          </div>
      </div>
  </section>
  <section class="section">
      <div class="container">
          <div class="columns">
            <div class="column">
              First column
            </div>
            <div class="column">
              <form action="{{ route('checkouts.store') }}" method="POST">
                @csrf
            
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" name="promo" type="text"  value="{{ old('promo') }}" placeholder="PROMO CODE">
                  </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" name="email" type="email" value="{{ old('email') }}" placeholder="Email Address">
                  </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="text" name="address" value="{{ old('address') }}" placeholder="Address">
                  </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input is-medium" type="text" name="city" value="{{ old('city') }}" placeholder="City">
                        </p>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                          <input class="input is-medium" type="text" name="state" value="{{ old('state') }}" placeholder="State">
                        </p>
                      </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input is-medium" name="country" type="text" value="{{ old('country') }}" placeholder="Country">
                        </p>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                          <input class="input is-medium" name="phone" type="text" value="{{ old('phone') }}" placeholder="Phone">
                        </p>
                      </div>
                    </div>
                </div>
                <div class="field">
                  <div class="control is-medium ">
                    <input class="input is-medium" type="text" name="name_on_card"  value="{{ old('name_on_card') }}" placeholder="Name on Card">
                  </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="text" name="card_number"  value="{{ old('card_number') }}" placeholder="Card Number">
                  </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="text" name="validity"  value="{{ old('validity') }}" placeholder="Valid Through: MM / YY">
                  </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="text" name="cvc"  value="{{ old('cvc') }}" placeholder="CVC">
                  </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <button class="button is-link is-medium is-fullwidth">Submit Payment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
  </section>
@endsection
