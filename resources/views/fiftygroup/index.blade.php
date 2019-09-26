@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container has-background-primary">
            <div class="columns is-mobile">
            <div class="column is-three-fifths is-offset-one-fifth">
                <h2 class="is-size-4">Signup for 10% Discount</h2>
                <br>
                <a  href="{{ route('admin.dashboard') }}" class="button is-info">Return to Admin Dashboard</a>
                <br>
                <br>
                <p class="control">
                    <a   href="{{ route('fiftygroups.create') }}" class="button is-link">
                    Add New Signup
                    </a>
                </p>
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
                                <th><abbr title="firstname"><strong>FirstName</strong></abbr></th>
                                <th><abbr title="lastname">LastName</abbr></th>
                                <th><abbr title="email">Email</abbr></th>
                                <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fiftygroups as $fiftygroup)
                                    <tr class="bg-grey-darkest">
                                        <td>{{ $fiftygroup->id }}</td>
                                        <td>{{ $fiftygroup->university }}</td>
                                        <td>{{ $fiftygroup->enddate }}</td>
                                        <td>{{ $fiftygroup->discountrules }}</td>
                                        <td>
                                        <div class="field is-grouped">
                                            <p class="control">
                                                <a href="{{ route('fiftygroups.show', $fiftygroup->id) }}" class="button is-primary">Show</a>
                                            </p>
                                            <p class="control">
                                                <a href="{{ route('fiftygroups.edit', $fiftygroup->id) }}" class="button is-primary">Edit</a>
                                            </p>
                                            <form action="{{ route('fiftygroups.destroy', $fiftygroup->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <p class="control">
                                                <button class="button is-danger" type="submit">Delete</button>
                                                </p>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {!! $fiftygroups->links() !!}
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
