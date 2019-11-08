@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Clients</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ $clients->links() }}

                <table class="table table-striped table-bordered table-sm table-responsive text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">Actions</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address (line 1)</th>
                            <th scope="col">Address (line 2)</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">Country</th>
                            <th scope="col">Legacy ID</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>
                                    <div class="dropdown" style="text-align: center;">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-lg"></i>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#"><i class="fal fa-eye fa-lg" style="color: dodgerblue;"></i>&nbsp;&nbsp;View</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-edit fa-lg" style="color: green;"></i>&nbsp;&nbsp;Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fal fa-trash-alt fa-lg" style="color: tomato;"></i>&nbsp;&nbsp;Delete</a>

{{--                                             <a class="dropdown-item" href="{{ route('clients.show', $client) }}"><i class="fal fa-eye fa-lg" style="color: dodgerblue;"></i>&nbsp;View</a>
                                            <a class="dropdown-item" href="{{ route('clients.edit', $client) }}"><i class="fal fa-edit fa-lg" style="color: green;"></i>&nbsp;Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('clients.destroy', $client) }}"><i class="fal fa-trash-alt fa-lg" style="color: tomato;"></i>&nbsp;Delete</a>
 --}}                                        </div>
                                    </div>
                                </td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->address1 }}</td>
                                <td>{{ $client->address2 }}</td>
                                <td>{{ $client->city }}</td>
                                <td>{{ $client->state }}</td>
                                <td>{{ $client->postalcode }}</td>
                                <td>{{ $client->country }}</td>
                                <td>{{ $client->legacy_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $clients->links() }}

            </div>
        </div>
    </div>
@endsection