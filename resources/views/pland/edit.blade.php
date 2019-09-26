@extends('layouts.app')

@section('title', 'Edit Details for ' . $planD->firstname)

@section('content')
  <section class="section"><br><br>
      <div class="container">
          <div class="columns">
            <div class="column">
              <form action="{{ route('fifty.update',$planD->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input is-medium" type="text" name="firstname" value="{{ $planD->firstname }}" placeholder="first-name">
                        </p>
                        <div>{{ $errors->first('firstname') }}</div>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                          <input class="input is-medium" type="text" name="lastname" value="{{ $planD->lastname }}" placeholder="last-name">
                        </p>
                        <div>{{ $errors->first('lastname') }}</div>
                      </div>
                    </div>
                </div>
                <div class="field">
                  <div class="control is-medium">
                    <input class="input is-medium" type="email" name="email" value="{{ $planD->email }}" placeholder="email">
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
          </div><br><br>
      </div>
  </section>
@endsection
