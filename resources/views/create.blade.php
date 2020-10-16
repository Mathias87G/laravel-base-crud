@extends('layouts.app')
@section('content')
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
  </div>
  @endif
  <form action="{{(!empty($player)) ? route('players.update',$player->id) : route('players.store')}}" method="post">
    @csrf
    @if(!empty($player))
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $player->id }}" >
    @else
      @method('POST')
    @endif
  <div class="">
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" placeholder="" value="{{old('nome')}}">
    <label for="cognome">Cognome</label>
    <input type="text" id="cognome" name="cognome" placeholder="" value="{{old('cognome')}}">
  </div>
  <div class="">
    <label for="ruolo">Ruolo</label>
    <select id="ruolo" class="ruolo" name="ruolo">
      <option value="P">P</option>
      <option value="D">D</option>
      <option value="C">C</option>
      <option value="A">A</option>
    </select>
    <label for="squadra">Squadra</label>
    <input type="text" id="squadra" name="squadra" placeholder="" value="{{old('squadra')}}">
    <label for="prezzo base">Prezzo Base</label>
    <input type="number" id="prezzo_base" name="prezzo_base" placeholder="">
    <label for="prezzo asta">Prezzo Asta</label>
    <input type="number" id="prezzo_asta" name="prezzo_asta" placeholder="">
  </div>
  <textarea id="note" name="note" rows="8" cols="80" >{{old('note')}} </textarea>
  <input type="submit" value="Invia">
</form>

@endsection
