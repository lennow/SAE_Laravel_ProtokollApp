@extends('layouts.app')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <h2>Dashboard</h2>
        </div>
        <div class="card-content">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            You are logged in!
        </div>
    </div>
</div>
@endsection
