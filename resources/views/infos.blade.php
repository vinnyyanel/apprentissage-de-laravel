@extends('vue1')
@section('titre')
form
@endSection
@section('contenu')
{!! Form::open(['url'=>'infos'])!!}
{!! Form::label('nom','entrer votre nom')!!}
{!! Form::text('nom')!!}
{!! Form::submit('envoyer')!!}
{!! Form::close()!!}
@endSection