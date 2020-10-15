@extends('layouts.app')
@section('content')
  <form action="{{route('players.store')}}" method="post">
  @csrf
  <div class="">
    <input name="_method" type="hidden" value="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="" value="{{old('nome')}}">
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome" placeholder="" value="{{old('cognome')}}">
  </div>
  <div class="">
    <label for="ruolo">Ruolo</label>
    <select class="ruolo" name="ruolo">
      <option value="P">P</option>
      <option value="D">D</option>
      <option value="C">C</option>
      <option value="A">A</option>
    </select>
    <label for="squadra">Squadra</label>
    <input type="text" name="squadra" placeholder="" value="{{old('squadra')}}">
    <label for="prezzo base">Prezzo Base</label>
    <input type="number" name="prezzo base" placeholder="">
    <label for="prezzo asta">Prezzo Asta</label>
    <input type="number" name="prezzo asta" placeholder="">
  </div>
  <textarea name="note" rows="8" cols="80" >{{old('note')}} </textarea>
  <input type="submit" value="Invia">
</form>

@endsection
