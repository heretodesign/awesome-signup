@extends('layouts.app')

@section('content')
    <section>
        <div class="container has-background-primary">
            <div class="columns is-mobile">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <a  href="{{ route('tengroups.index') }}" class="button is-info">Back to Index</a>
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
                            {{ $tengroups->university }}
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
                            {{ $tengroups->enddate }}
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
                        {{ $tengroups->discountrule }}
                  </div>
                </div>
            </div>
          </div>
      </div>
  </section>
@endsection
