@extends('layouts.app')
@section('content')
    <ul>
      <li>{{$player->nome}} {{$player->cognome}}</li>
      <li>{{$player->ruolo}}</li>
      <li>{{$player->squadra}}</li>
      <li>{{$player->prezzo_base}}</li>
      <li>{{$player->prezzo_asta}}</li>
      <li>{{$player->note}}</li>
    </ul>
@endsection
