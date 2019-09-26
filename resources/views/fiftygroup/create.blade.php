@extends('layouts.app')

@section('content')
  <section class="section">
      <div class="container">
          <div class="columns">
            <div class="column is-half is-offset-one-quarter">
              <form method="POST" action="{{ route('fiftygroups.store') }}">
                @csrf
                <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input is-medium" type="text" name="university" value="{{ old('university') }}"  placeholder="university">
                        </p>
                        <div>{{ $errors->first('university') }}</div>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                          <input class="input is-medium" type="text" name="enddate" value="{{ old('enddate') }}"  placeholder="End Date">
                        </p>
                        <div>{{ $errors->first('enddate') }}</div>
                      </div>
                    </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="text" name="discountrules" value="{{ old('discountrules') }}"  placeholder="Discount Rules">
                  </div>
                  <div>{{ $errors->first('discountrules') }}</div>
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
