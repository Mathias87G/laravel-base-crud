@extends('layouts.app')
@section('content')
  @foreach ($data as $player)
    <ul>
      <li>{{$player->nome}}</li>
      <li>{{$player->cognome}}</li>
      <li>{{$player->ruolo}}</li>
      <li>{{$player->squadra}}</li>
      <li>{{$player->prezzo_base}}</li>
      <li>{{$player->prezzo_asta}}</li>
      <li>{{$player->note}}</li>
    </ul>
  @endforeach
@endsection
