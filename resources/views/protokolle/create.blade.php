@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h2>Neues Protokoll</h2>
            </div>
            <div class="card-content">
               <form action="{{ route('protocols.store') }}" method="post">
                   @csrf
                   <div class="field">
                       <label class="label" for="title">Titel</label>
                       <div class="control">
                           <input type="text" id="title" name="title" class="input @error('title') is-danger @enderror">
                       </div>
                   </div>
                   <div class="field">
                       <label class="label" for="category">Titel</label>
                       <div class="control">
                           <select id="category" name="category" class="input @error('category') is-danger @enderror">
                               <option value="intern">Internes Meeting</option>
                               <option value="kunde">Kundengespräch</option>
                               <option value="partner">Partnermeeting</option>
                           </select>
                       </div>
                   </div>
                   <div class="field">
                       <label class="label" for="body">Titel</label>
                       <div class="control">
                           <textarea id="body" name="body" class="textarea @error('body') is-danger @enderror"></textarea>
                       </div>
                   </div>
                   <div class="field">
                       <div class="control">
                           <input type="submit" name="submit" value="Speichern" class="button is-link">
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
@endsection
