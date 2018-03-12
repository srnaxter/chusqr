@extends('layouts.app')

@section('content')
    <h1>Usuarios que han dado like al chusqr</h1>
    <div class="row center-block">
        @foreach($chusqer->likes as $like)
            <div class="column center-block">
                <div class="card" style="width: 350px;">

                    <a href="/{{$like->user->slug}}">
                        <div class="card-divider">{{$like->user->name}}</div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection