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
                <div class="columns">
                    <p class="column is-one-fifth">
                        <a href="{{ route('protocols.edit', $protocol->id) }}" class="button is-primary">bearbeiten</a>
                    </p>
                    <form action="{{ route('protocols.destroy', $protocol->id) }}" method="post" class="column is-one-fifth">
                        @csrf
                        @method('delete')
                        <button type="submit" name="delete_submit" class="button is-danger">löschen</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
