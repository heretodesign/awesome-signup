@extends('layouts.app')

@section('content')
  <section class="section">
      <div class="container">
          <div class="columns is-mobile">
            <div class="column is-half is-offset-one-quarter">
              <div>
                  <h2 class="title is-3">
                    Sign Up for 10 Plus People
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
              <div class="content">
                  <h1>Next Step</h1>
                  <p>
                  @if(count($discounts))
                    @foreach($discounts as $discount)
                      Add your name to the group to {{ $discount->university }} list by midnight 
                      <strong>{{ $discount->enddate }}</strong>. {{ $discount->discountrules }}.
                    @endforeach
                  @endif  
                  Fill up the form and our dedicated team will get in touch with you. 
                  </p>
                </div>
            </div>
            <div class="column">
              <form method="POST" action="{{ route('ten.store') }}">
                @csrf
                <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input is-medium" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="first-name">
                        </p>
                        <div>{{ $errors->first('firstname') }}</div>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                          <input class="input is-medium" type="text" name="lastname"  value="{{ old('lastname') }}" placeholder="last-name">
                        </p>
                        <div>{{ $errors->first('lastname') }}</div>
                      </div>
                    </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="email" name="email" value="{{ old('email') }}" placeholder="email">
                  </div>
                  <div>{{ $errors->first('email') }}</div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <button class="button is-link is-medium is-fullwidth">Submit Payment</button>
                  </div>
                </div>
              </form>
            </div>
          </div> <br><br>
          <div class="columns">
            <div class="column">
              <div class="content">
                  <h1>10 Person Group 10% OFF</h1>
                  <p>
                    Regular price for AMBOSS Plus: <br>

                  </p>
                  <div class="column is-half">
                        <table class="table">
                          <thead>
                            <tr>
                              <th width="50%"><abbr title="Played">Price</abbr></th>
                              <th width="50%"><abbr title="Won">Validity</abbr></th>
                            </tr>
                          </thead>
                          <tbody>
                                <tr class="bg-grey-darkest">
                                    <td width="50%">$235</td>
                                    <td width="50%">6 Months</td>
                                </tr>
                                <tr class="bg-grey-darkest">
                                    <td>$365</td>
                                    <td>for 12 Months</td>
                                </tr>
                                <tr class="bg-grey-darkest">
                                    <td>$235</td>
                                    <td>6 Months</td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>
@endsection
