@extends('layouts.app')

@section('content')
  <div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <!-- <h2 class="uppercase pt-4 text-white items-center">Manage Users</h2> -->
        </div>
        <div class="h-12 w-1/2 mt-5">
          @hasrole('admin')
          <div class="pull-right">
              <a href="{{ route('admin.users.index') }}">Manage Users</a>
          </div>
          @endhasrole
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <section class="section">
            <div class="container">
                <div class="columns is-mobile">
                  <div class="column is-three-fifths is-offset-one-quarter">
                    <div>
                        <table class="table">
                          <thead>
                            <tr>
                              <th><abbr title="Played">Name</abbr></th>
                              <th><abbr title="Won">Email</abbr></th>
                              <th><abbr title="Won">Roles</abbr></th>
                              <th width="30%"><abbr title="Won">Actions</abbr></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                                <tr class="bg-grey-darkest">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                    <td>
                                       <a href="{{ route('admin.users.edit', $user->id) }}" class="button is-primary float-left">
                                         <span>Edit</span>
                                       </a> 
                                       <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                         @csrf
                                         {{ method_field('DELETE') }}
                                         <button type="submit" class="button is-danger float-right">Delete</button>
                                       </form>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                  </div>
                </div>
            </div>
        </section>
    </div>
  </div>
@endsection
