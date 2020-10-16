@extends('layouts.app')
@section('content')
  @foreach ($data as $player)
    <ul>
      <a href="{{route('players.show', $player->id )}}"><li>{{$player->nome}} {{$player->cognome}}</li></a>
      <li>{{$player->ruolo}}</li>
      <li>{{$player->squadra}}</li>
      <li>{{$player->prezzo_base}}</li>
      <li>{{$player->prezzo_asta}}</li>
      <li>{{$player->note}}</li>
      <li>
        <form class="" action="{{route('players.destroy',$player->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" name="" value="Cancella">
        </form>
      </li>

    </ul>
  @endforeach
@endsection
