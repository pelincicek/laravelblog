@extends('layout')

@section('content')

@foreach($articles as $article)
<a href="{{ route('articleDetail', $article)}}">
    {{$article->title}} 
    </a><br>
@endforeach
<hr>
<a href="{{ route('newArticleForm')}}">Yeni ekle </a>

@endsection