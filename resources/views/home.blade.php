@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                        <tr><th>Nim</th><th>:</th><td>{{ $user->nim }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        <tr><th>Class</th><th>:</th><td>{{ $user->class }}</td></tr>
                        <tr><th>Department</th><th>:</th><td>{{ $user->department }}</td></tr>
                        <tr><th>Phone_number</th><th>:</th><td>{{ $user->phone_number }}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
