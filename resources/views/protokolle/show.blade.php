@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="card" style="width: 75%; margin: 2em auto;">
            <div class="card-header">
                <h2 class="card-header-title">{{ $protocol->title }}</h2>
            </div>
            <div class="card-content">
                <p class="is-small">{{ $protocol->category }}</p>
                <p>
                    {{ $protocol->body }}
                </p>
            </div>
        </div>
    </div>
@endsection