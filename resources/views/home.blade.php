@extends('layouts.app')

@section('content')
<div class="content">
    <div class="card" style="width: 75%; margin: 2em auto;">
        <div class="card-header">
            <h2 class="card-header-title">Alle Protokolle</h2>
        </div>
        <div class="card-content">
            @foreach($protocols as $protocol)
                <h3>
                    <a href="{{ route('protocols.show', $protocol->id) }}">{{ $protocol->title }}</a>
                </h3>
                <p class="is-small">Kategorie: {{ $protocol->category }}</p>
                <p>
                    {{ $protocol->body }}
                </p>
            @endforeach
        </div>
    </div>
</div>
@endsection
