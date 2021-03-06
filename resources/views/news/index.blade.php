@extends('layouts.app')

@section('content')
    {{link_to_route('news.create', 'Ajouter une news', [], ['class' => 'btn btn-primary'])}}
    <h1>Bienvenu sur les News!</h1>

    @foreach($news as $new)
    <div class="panel panel-default">
        <div class="panel-heading">
            {{link_to_route('news.show', $new->titre, [$new->id])}}
        </div>
        <div class="panel-body">
            {{Str::limit($new->contenu, 100, ' ...')}}
        </div>
        <div class="panel-footer">{{date('d-m-Y H:i:s', strtotime($new->created_at))}}</div>
    </div>
    @endforeach

    {!! $news->links() !!}

@endsection