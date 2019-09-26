@extends('layouts.app')

@section('title', 'Details for ' . $planC->firstname)

@section('content')
    <section>
        <div class="container has-background-primary">
            <div class="columns is-mobile">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <a  href="{{ route('thirty.index') }}" class="button is-info">Back to Index</a>
                </div>
            </div>
        </div>   
    </section>
    <section class="section">
        <div class="container">
          <div class="columns">
            <div class="column">
                <div class="field">
                      <div class="field">
                      <label for="Email">Firstname:</label>
                        <p class="control is-expanded has-icons-left">
                            {{ $planC->firstname }}
                        </p>
                      </div>
                </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
                <div class="field is-horizontal">
                      <div class="field">
                      <label for="Email">Lastname:</label>
                        <p class="control is-expanded has-icons-left has-icons-right">
                            {{ $planC->lastname }}
                        </p>
                    </div>
                </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
                <div class="field">
                <label for="Email">Email:</label>
                  <div class="control is-medium">
                        {{ $planC->email }}
                  </div>
                </div>
            </div>
          </div>
      </div>
  </section>
@endsection
