@extends('layouts.app')

@section('content')
  <div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Manage {{ $user->name }}</h2>
        </div>
        <div class="h-12 w-1/2 mt-5">
          <div class="pull-right">
              
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
                        <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
                          @csrf
                          {{ method_field('PUT') }}
                          @foreach($roles as $role)
                            <div class="form-check">
                              <input 
                                type="checkbox" 
                                name="roles[]" 
                                value="{{ $role->id }}"
                                {{ $user->hasAnyRole($role->name) ? 'checked' : '' }}>
                                <label for="">{{ $role->name }}</label>
                            </div>
                          @endforeach

                          <button class="button is-primary" type="submit">Update</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </section>
    </div>
  </div>
@endsection
