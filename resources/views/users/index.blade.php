@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container has-background-primary">
            <div class="columns is-mobile">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <h2 class="is-size-4">List of Users in Database</h2>
                    <br>
                    <a  href="{{ route('admin.dashboard') }}" class="button is-info">Return to Admin Dashboard</a>
                    <br>
                    <br>
                </div>
                <div class="column">
                    <h2 class="is-size-4">Send Email to Users</h2>
                    <br>
                    <a  href="{{ route('admin.dashboard') }}" class="button is-info">Send Email</a>
                    <br>
                    <br>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <section class="section has-background-primary">
                <div class="container">
                    <div class="columns is-mobile">
                    <div class="column is-three-fifths is-offset-one-fifth">
                        <div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th><abbr title="id">id</abbr></th>
                                <th><abbr title="firstname"><strong>FullName</strong></abbr></th>
                                <th><abbr title="email">Email</abbr></th>
                                <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="bg-grey-darkest">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="field is-grouped">
                                               
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {!! $users->links() !!}
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
