@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Add a Client</h1>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form
                    method="POST"
                    action="{{ route('clients.store') }}"
                >
                    @csrf

                    {{-- @include('clients._form') --}}

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input
                            type="text"
                            class="form-control @error('name') form-error @enderror"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >
                        @error('name')
                            <div class="form-error">
                                {{ $errors->first('name') }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="address1">Address Line 1 <span> - optional</span></label>
                        <input
                            type="text"
                            class="form-control @error('address1') form-error @enderror"
                            name="address1"
                            id="address1"
                            value="{{ old('address1') }}"
                        >
                        @error('address1')
                            <div class="form-error">
                                {{ $errors->first('address1') }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="address2">Address Line 2 <span> - optional</span></label>
                        <input
                            type="text"
                            class="form-control @error('address2') form-error @enderror"
                            name="address2"
                            id="address2"
                            value="{{ old('address2') }}"
                        >
                        @error('address2')
                            <div class="form-error">
                                {{ $errors->first('address2') }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="city">City <span> - optional</span></label>
                            <input
                                type="text"
                                class="form-control @error('city') form-error @enderror"
                                name="city"
                                id="city"
                                value="{{ old('city') }}"
                            >
                            @error('city')
                                <div class="form-error">
                                    {{ $errors->first('city') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3 mb-3">
                            <label for="state">State <span> - optional</span></label>
                            <input
                                type="text"
                                class="form-control @error('state') form-error @enderror"
                                name="state"
                                id="state"
                                value="{{ old('state') }}"
                            >
                            @error('state')
                                <div class="form-error">
                                    {{ $errors->first('state') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3 mb-3">
                            <label for="postalcode">Postal Code <span> - optional</span></label>
                            <input
                                type="text"
                                class="form-control @error('postalcode') form-error @enderror"
                                name="postalcode"
                                id="postalcode"
                                value="{{ old('postalcode') }}"
                            >
                            @error('postalcode')
                                <div class="form-error">
                                    {{ $errors->first('postalcode') }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="country">Country <span> - optional</span></label>
                        <input
                            type="text"
                            class="form-control @error('country') form-error @enderror"
                            name="country"
                            id="country"
                            value="{{ old('country') }}"
                        >
                        @error('country')
                            <div class="form-error">
                                {{ $errors->first('country') }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="from-group col-md-8 mb-3">
                            <label for="email">Email <span> - optional</span></label>
                            <input
                                type="text"
                                class="form-control @error('email') form-error @enderror"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                            >
                            @error('email')
                                <div class="form-error">
                                    {{ $errors->first('email') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-4 mb-3">
                            <label for="phone">Phone <span> - optional</span></label>
                            <input
                                type="text"
                                class="form-control @error('phone') form-error @enderror"
                                name="phone"
                                id="phone"
                                value="{{ old('phone') }}"
                            >
                            @error('phone')
                                <div class="form-error">
                                    {{ $errors->first('phone') }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3">
                            <label for="notes">Notes <span> - optional</span></label>
                            <textarea
                                type="text"
                                class="form-control @error('notes') form-error @enderror"
                                name="notes"
                                id="notes"
                            >
                                {{ old('notes') }}
                            </textarea>

                            @error('notes')
                                <div class="form-error">
                                    {{ $errors->first('notes') }}
                                </div>
                            @enderror
                    </div>

                    <div class="row col-md-8 mb-3">
                        <button type="submit" class="btn btn-primary">Add Client</button>
                        <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection