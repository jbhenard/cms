@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1 style="font-size:22px; line-height:22px; margin: 0;padding:0;">Forum</h1></div>
        <div class="panel-body">
            Modifier le post
            <div class="send">

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                {{ HTML::ul($errors->all()) }}
                </div>
                @endif

                {{ Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) }}
                <div class="form-group">
                {{ Form::label('Titre', 'Titre du post') }}
                {{ Form::text('title', null, ['required' => '', 'minlength'=> '5', 'maxlength' => '155', 'class' => 'form-control']) }}
                </div>
                <div class="form-group">
                {{ Form::label('Contenu', 'Contenu du post') }}
                {{ Form::textarea('content', null, ['required' => '', 'minlength'=> '15', 'maxlength' => '1500', 'class' => 'form-control']) }}
                </div>
                {{ Form::submit('Envoyer', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
