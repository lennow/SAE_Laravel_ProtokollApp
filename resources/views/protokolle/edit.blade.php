@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h2>Protokoll bearbeiten</h2>
            </div>
            <div class="card-content">
                <form action="{{ route('protocols.update', $protocol->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label" for="title">Titel</label>
                        <div class="control">
                            <input type="text" id="title" name="title" class="input @error('title') is-danger @enderror" value="{{ $protocol->title }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="category">Kategorie</label>
                        <div class="control">
                            <select id="category" name="category" class="input @error('category') is-danger @enderror">
                                <option value="intern" @if($protocol->category == 'intern') selected @endif>Internes Meeting</option>
                                <option value="kunde" @if($protocol->category == 'kunde') selected @endif>Kundengespräch</option>
                                <option value="partner" @if($protocol->category == 'partner') selected @endif>Partnermeeting</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="body">Protokoll</label>
                        <div class="control">
                            <textarea id="body" name="body" class="textarea @error('body') is-danger @enderror">
                                {{ $protocol->body }}
                            </textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="submit" name="update" value="Speichern" class="button is-link">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
