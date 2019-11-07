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

            <table class="table table-striped">
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
                            <td>&nbsp;</td>
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
        </div>
    </div>
</div>
@endsection