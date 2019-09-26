@extends('layouts.app')

@section('content')
  <section class="section"><br><br>
      <div class="container">
          <div class="columns">
            <div class="column">
              <form action="{{ route('tengroups.update', ['tengroups' => $tengroups]) }}" method="POST">
                @method('PATCH')
                @csrf

                <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input is-medium" type="text" name="university" value="{{ $tengroups->university }}" placeholder="first-name">
                        </p>
                        <div>{{ $errors->first('university') }}</div>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                          <input class="input is-medium" type="text" name="enddate" value="{{ $tengroups->enddate }}" placeholder="last-name">
                        </p>
                        <div>{{ $errors->first('enddate') }}</div>
                      </div>
                    </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="text" name="discountrules" value="{{ $tengroups->discountrules }}" placeholder="email">
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
          </div><br><br>
      </div>
  </section>
@endsection
